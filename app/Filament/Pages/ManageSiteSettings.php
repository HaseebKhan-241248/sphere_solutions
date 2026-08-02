<?php

namespace App\Filament\Pages;

use App\Support\SiteSettings;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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

class ManageSiteSettings extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?string $slug = 'site-settings';

    protected static ?int $navigationSort = 1;

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function getTitle(): string
    {
        return 'Site Settings';
    }

    public function mount(): void
    {
        $this->form->fill(SiteSettings::formState());
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
                Section::make('Branding')
                    ->description('Upload logos used in the website header. Leave empty to keep the current default logos.')
                    ->schema([
                        FileUpload::make(SiteSettings::LOGO_DESKTOP)
                            ->label('Desktop header logo')
                            ->image()
                            ->disk('public')
                            ->directory('settings/logos')
                            ->imageEditor()
                            ->maxSize(4096)
                            ->helperText('Used in the blue top bar on desktop.'),
                        FileUpload::make(SiteSettings::LOGO_MOBILE)
                            ->label('Mobile header logo')
                            ->image()
                            ->disk('public')
                            ->directory('settings/logos')
                            ->imageEditor()
                            ->maxSize(4096)
                            ->helperText('Used in the mobile navigation bar.'),
                    ])
                    ->columns(2),
                Section::make('Contact details')
                    ->schema([
                        TextInput::make(SiteSettings::ADDRESS)
                            ->label('Address')
                            ->required()
                            ->maxLength(255),
                        TextInput::make(SiteSettings::PHONE)
                            ->label('Phone number')
                            ->required()
                            ->maxLength(50),
                        TextInput::make(SiteSettings::EMAIL)
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Section::make('Social links')
                    ->description('These links appear in the header, footer, and other shared website sections.')
                    ->schema([
                        TextInput::make(SiteSettings::FACEBOOK_URL)
                            ->label('Facebook')
                            ->url()
                            ->maxLength(255),
                        TextInput::make(SiteSettings::TWITTER_URL)
                            ->label('X (Twitter)')
                            ->url()
                            ->maxLength(255),
                        TextInput::make(SiteSettings::INSTAGRAM_URL)
                            ->label('Instagram')
                            ->url()
                            ->maxLength(255),
                        TextInput::make(SiteSettings::LINKEDIN_URL)
                            ->label('LinkedIn')
                            ->url()
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Section::make('WhatsApp chat')
                    ->description('Floating chat button shown on the public website.')
                    ->schema([
                        Toggle::make(SiteSettings::WHATSAPP_ENABLED)
                            ->label('Enable WhatsApp chat button')
                            ->inline(false),
                        TextInput::make(SiteSettings::WHATSAPP_NUMBER)
                            ->label('WhatsApp number')
                            ->helperText('Digits only, with country code. Example: 16043137091')
                            ->tel()
                            ->maxLength(30)
                            ->required(fn (callable $get): bool => (bool) $get(SiteSettings::WHATSAPP_ENABLED)),
                        TextInput::make(SiteSettings::WHATSAPP_LABEL)
                            ->label('Button label')
                            ->maxLength(80)
                            ->placeholder('Need Help? Chat with us'),
                        Textarea::make(SiteSettings::WHATSAPP_MESSAGE)
                            ->label('Pre-filled chat message')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        SiteSettings::saveMany($data);

        Notification::make()
            ->success()
            ->title('Saved')
            ->body('Site settings have been updated.')
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
        return Form::make([EmbeddedSchema::make('form')])
            ->id('form')
            ->livewireSubmitHandler('save')
            ->footer([
                Actions::make([
                    Action::make('save')
                        ->label('Save settings')
                        ->submit('save')
                        ->keyBindings(['mod+s']),
                ]),
            ]);
    }
}
