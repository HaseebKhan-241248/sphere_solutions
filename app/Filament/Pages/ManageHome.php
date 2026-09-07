<?php

namespace App\Filament\Pages;

use App\Models\Home;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
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

class ManageHome extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHome;

    protected static ?string $navigationLabel = 'Home Page';

    protected static ?string $slug = 'home';

    protected static ?int $navigationSort = 0;

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function getTitle(): string
    {
        return 'Home Page';
    }

    public function mount(): void
    {
        $data = Home::query()->first()?->only((new Home)->getFillable()) ?? [];
        $data['benefits'] = $this->normalizeBenefits($data['benefits'] ?? []);
        $data['about_features'] = $this->normalizeAboutFeatures($data['about_features'] ?? []);

        $this->form->fill($data);
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
                        FileUpload::make('hero_video')
                            ->label('Hero Section video')
                            ->acceptedFileTypes(['video/mp4'])
                            ->disk('public')
                            ->directory('home/videos')
                            ->maxSize(102400)
                            ->columnSpanFull(),
                        TextInput::make('hero_tagline')
                            ->label('Tagline')
                            ->maxLength(255),
                        TextInput::make('hero_heading')
                            ->label('Heading')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('hero_subheading')
                            ->label('Subheading')
                            ->rows(3)
                            ->columnSpanFull(),
                        TextInput::make('hero_primary_cta_text')
                            ->label('Primary button text')
                            ->maxLength(80),
                        TextInput::make('hero_primary_cta_url')
                            ->label('Primary button link')
                            ->maxLength(255),
                        TextInput::make('hero_secondary_cta_text')
                            ->label('Secondary button text')
                            ->maxLength(80),
                        TextInput::make('hero_secondary_cta_url')
                            ->label('Secondary button link')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Benefits')
                    ->schema([
                        TextInput::make('benefits_heading')
                            ->label('Section heading')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Repeater::make('benefits')
                            ->label('Cards')
                            ->schema([
                                FileUpload::make('icon')
                                    ->image()
                                    ->disk('public')
                                    ->directory('home/icons')
                                    ->maxSize(2048),
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(120),
                                Textarea::make('description')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->minItems(4)
                            ->maxItems(4)
                            ->defaultItems(4)
                            ->addable(false)
                            ->deletable(false)
                            ->reorderable(false)
                            ->addAction(fn (Action $action) => $action->hidden())
                            ->addBetweenAction(fn (Action $action) => $action->hidden())
                            ->collapsible()
                            ->collapsed(true)
                            ->collapseAllAction(fn (Action $action) => $action->hidden())
                            ->expandAllAction(fn (Action $action) => $action->hidden())
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Benefit card')
                            ->columnSpanFull(),
                    ]),

                Section::make('About')
                    ->schema([
                        FileUpload::make('about_image')
                            ->label('Background image')
                            ->image()
                            ->disk('public')
                            ->directory('home/about')
                            ->maxSize(4096)
                            ->columnSpanFull(),
                        TextInput::make('about_tagline')
                            ->label('Tagline')
                            ->maxLength(255),
                        TextInput::make('about_heading')
                            ->label('Heading')
                            ->maxLength(255),
                        Textarea::make('about_description')
                            ->label('Description')
                            ->rows(4)
                            ->columnSpanFull(),
                        Repeater::make('about_features')
                            ->label('Highlights')
                            ->schema([
                                FileUpload::make('icon')
                                    ->image()
                                    ->disk('public')
                                    ->directory('home/icons')
                                    ->maxSize(2048),
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(120),
                                Textarea::make('description')
                                    ->rows(2)
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->minItems(2)
                            ->maxItems(2)
                            ->defaultItems(2)
                            ->addable(false)
                            ->deletable(false)
                            ->reorderable(false)
                            ->addAction(fn (Action $action) => $action->hidden())
                            ->addBetweenAction(fn (Action $action) => $action->hidden())
                            ->collapsible()
                            ->collapsed(true)
                            ->collapseAllAction(fn (Action $action) => $action->hidden())
                            ->expandAllAction(fn (Action $action) => $action->hidden())
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Highlight')
                            ->columnSpanFull(),
                        TextInput::make('about_cta_text')
                            ->label('Button text')
                            ->maxLength(80),
                        TextInput::make('about_cta_url')
                            ->label('Button link')
                            ->maxLength(255),
                    ])
                    ->columns(2),

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
        $data['benefits'] = $this->normalizeBenefits($data['benefits'] ?? []);
        $data['about_features'] = $this->normalizeAboutFeatures($data['about_features'] ?? []);

        Home::query()->updateOrCreate(
            ['id' => Home::query()->value('id') ?? 1],
            $data
        );

        Notification::make()
            ->success()
            ->title('Saved')
            ->body('Home page content has been updated.')
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
                        ->label('Save Home Page')
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
        $existing = Home::query()->first();
        $fallback = $existing?->only((new Home)->getFillable()) ?? [];

        foreach (['hero_video', 'about_image'] as $field) {
            if (blank($data[$field] ?? null) && filled($fallback[$field] ?? null)) {
                $data[$field] = $fallback[$field];
            }
        }

        $data['benefits'] = $this->preserveRepeaterIcons(
            is_array($data['benefits'] ?? null) ? $data['benefits'] : [],
            is_array($fallback['benefits'] ?? null) ? $fallback['benefits'] : [],
        );
        $data['about_features'] = $this->preserveRepeaterIcons(
            is_array($data['about_features'] ?? null) ? $data['about_features'] : [],
            is_array($fallback['about_features'] ?? null) ? $fallback['about_features'] : [],
        );

        return $data;
    }

    /**
     * @param  array<int, array<string, mixed>>  $incoming
     * @param  array<int, array<string, mixed>>  $existing
     * @return array<int, array<string, mixed>>
     */
    private function preserveRepeaterIcons(array $incoming, array $existing): array
    {
        $existingByTitle = [];

        foreach ($existing as $item) {
            $title = $item['title'] ?? null;

            if (filled($title) && filled($item['icon'] ?? null)) {
                $existingByTitle[$title] = $item['icon'];
            }
        }

        foreach ($incoming as $index => $item) {
            if (filled($item['icon'] ?? null)) {
                continue;
            }

            $title = $item['title'] ?? null;

            if (filled($title) && isset($existingByTitle[$title])) {
                $incoming[$index]['icon'] = $existingByTitle[$title];

                continue;
            }

            if (filled($existing[$index]['icon'] ?? null)) {
                $incoming[$index]['icon'] = $existing[$index]['icon'];
            }
        }

        return $incoming;
    }

    /**
     * @param  array<int, array<string, mixed>>  $benefits
     * @return array<int, array<string, mixed>>
     */
    private function normalizeBenefits(array $benefits): array
    {
        $benefits = array_values(array_slice($benefits, 0, 4));

        while (count($benefits) < 4) {
            $benefits[] = [
                'icon' => null,
                'title' => '',
                'description' => '',
            ];
        }

        return $benefits;
    }

    /**
     * @param  array<int, array<string, mixed>>  $features
     * @return array<int, array<string, mixed>>
     */
    private function normalizeAboutFeatures(array $features): array
    {
        $features = array_values(array_slice($features, 0, 2));

        while (count($features) < 2) {
            $features[] = [
                'icon' => null,
                'title' => '',
                'description' => '',
            ];
        }

        return $features;
    }
}
