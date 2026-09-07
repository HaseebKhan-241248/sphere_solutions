<?php

namespace App\Filament\Pages;

use App\Models\ServicePage;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ManageServices extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Services';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $navigationLabel = 'Page Settings';

    protected static ?string $slug = 'services-page';

    protected static ?int $navigationSort = 2;

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function getTitle(): string
    {
        return 'Services Page Settings';
    }

    public function mount(): void
    {
        $this->form->fill(
            ServicePage::query()->first()?->only((new ServicePage)->getFillable()) ?? []
        );
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero')
                    ->schema([
                        FileUpload::make('hero_image')
                            ->label('Hero image')
                            ->image()
                            ->disk('public')
                            ->directory('services/hero')
                            ->maxSize(4096)
                            ->columnSpanFull(),
                        TextInput::make('hero_heading')
                            ->label('Heading')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Services Section')
                    ->schema([
                        TextInput::make('services_tagline')
                            ->label('Tagline')
                            ->maxLength(255),
                        TextInput::make('services_heading')
                            ->label('Heading')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->description('Service cards are managed under Services in the admin menu.'),

                Section::make('Contact')
                    ->schema([
                        TextInput::make('contact_tagline')
                            ->label('Tagline')
                            ->maxLength(255),
                        TextInput::make('contact_heading')
                            ->label('Heading')
                            ->maxLength(255),
                        Textarea::make('contact_paragraph_1')
                            ->label('First paragraph')
                            ->rows(3)
                            ->columnSpanFull(),
                        Textarea::make('contact_paragraph_2')
                            ->label('Second paragraph')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public function save(): void
    {
        $data = $this->preserveExistingMedia($this->form->getState());

        ServicePage::query()->updateOrCreate(
            ['id' => ServicePage::query()->value('id') ?? 1],
            $data
        );

        Notification::make()
            ->success()
            ->title('Saved')
            ->body('Services page settings have been updated.')
            ->send();
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getFormContentComponent(),
            ]);
    }

    public function getFormContentComponent(): Component
    {
        return Form::make([
            EmbeddedSchema::make('form'),
        ])
            ->id('form')
            ->livewireSubmitHandler('save')
            ->footer([
                Actions::make([
                    Action::make('save')
                        ->label('Save Page Settings')
                        ->submit('save')
                        ->keyBindings(['mod+s']),
                ]),
            ]);
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    private function preserveExistingMedia(array $data): array
    {
        $existing = ServicePage::query()->first();
        $fallback = $existing?->only((new ServicePage)->getFillable()) ?? [];

        if (blank($data['hero_image'] ?? null) && filled($fallback['hero_image'] ?? null)) {
            $data['hero_image'] = $fallback['hero_image'];
        }

        return $data;
    }
}
