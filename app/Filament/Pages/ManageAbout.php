<?php

namespace App\Filament\Pages;

use App\Models\About;
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

class ManageAbout extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInformationCircle;

    protected static ?string $navigationLabel = 'About Page';

    protected static ?string $slug = 'about-us';

    protected static ?int $navigationSort = 2;

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function getTitle(): string
    {
        return 'About Page';
    }

    public function mount(): void
    {
        $data = About::query()->first()?->only((new About)->getFillable()) ?? [];
        $data['features'] = $this->normalizeFeatures($data['features'] ?? []);
        $data['about_highlights'] = $this->normalizeAboutHighlights($data['about_highlights'] ?? []);

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
                        TextInput::make('hero_heading')
                            ->label('Heading')
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('hero_image')
                            ->label('Hero image')
                            ->image()
                            ->disk('public')
                            ->directory('about/hero')
                            ->maxSize(4096),
                    ])
                    ->columns(2),

                Section::make('Why Choose Us')
                    ->schema([
                        TextInput::make('features_tagline')
                            ->label('Tagline')
                            ->maxLength(255),
                        TextInput::make('features_heading')
                            ->label('Heading')
                            ->maxLength(255),
                        Repeater::make('features')
                            ->label('Feature cards')
                            ->schema($this->cardRepeaterSchema(rows: 2))
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
                            ->columnSpanFull()
                            ->collapsed(true)
                            ->collapseAllAction(fn (Action $action) => $action->hidden())
                            ->expandAllAction(fn (Action $action) => $action->hidden())
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Feature card'),
                    ])
                    ->columns(2),

                Section::make('About Block')
                    ->schema([
                        FileUpload::make('about_image')
                            ->label('Background image')
                            ->image()
                            ->disk('public')
                            ->directory('about/block')
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
                        Repeater::make('about_highlights')
                            ->label('Highlights')
                            ->schema($this->cardRepeaterSchema(rows: 2))
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
            ]);
    }

    public function save(): void
    {
        $data = $this->preserveExistingMedia($this->form->getState());
        $data['features'] = $this->normalizeFeatures($data['features'] ?? []);
        $data['about_highlights'] = $this->normalizeAboutHighlights($data['about_highlights'] ?? []);

        About::query()->updateOrCreate(
            ['id' => About::query()->value('id') ?? 1],
            $data
        );

        Notification::make()
            ->success()
            ->title('Saved')
            ->body('About page content has been updated.')
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
                        ->label('Save About Page')
                        ->submit('save')
                        ->keyBindings(['mod+s']),
                ]),
            ]);
    }

    /**
     * @return array<int, \Filament\Forms\Components\Component>
     */
    private function cardRepeaterSchema(int $rows = 2): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->maxLength(120)
                ->columnSpanFull(),
            FileUpload::make('icon')
                ->image()
                ->disk('public')
                ->directory('about/icons')
                ->maxSize(2048),
            Textarea::make('description')
                ->rows($rows),
        ];
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    private function preserveExistingMedia(array $data): array
    {
        $existing = About::query()->first();
        $fallback = $existing?->only((new About)->getFillable()) ?? [];

        foreach (['hero_image', 'about_image'] as $field) {
            if (blank($data[$field] ?? null) && filled($fallback[$field] ?? null)) {
                $data[$field] = $fallback[$field];
            }
        }

        $data['features'] = $this->preserveRepeaterIcons(
            is_array($data['features'] ?? null) ? $data['features'] : [],
            is_array($fallback['features'] ?? null) ? $fallback['features'] : [],
        );
        $data['about_highlights'] = $this->preserveRepeaterIcons(
            is_array($data['about_highlights'] ?? null) ? $data['about_highlights'] : [],
            is_array($fallback['about_highlights'] ?? null) ? $fallback['about_highlights'] : [],
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
     * @param  array<int, array<string, mixed>>  $features
     * @return array<int, array<string, mixed>>
     */
    private function normalizeFeatures(array $features): array
    {
        $features = array_values(array_slice($features, 0, 4));

        while (count($features) < 4) {
            $features[] = [
                'icon' => null,
                'title' => '',
                'description' => '',
            ];
        }

        return $features;
    }

    /**
     * @param  array<int, array<string, mixed>>  $highlights
     * @return array<int, array<string, mixed>>
     */
    private function normalizeAboutHighlights(array $highlights): array
    {
        $highlights = array_values(array_slice($highlights, 0, 2));

        while (count($highlights) < 2) {
            $highlights[] = [
                'icon' => null,
                'title' => '',
                'description' => '',
            ];
        }

        return $highlights;
    }
}
