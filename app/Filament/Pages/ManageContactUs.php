<?php

namespace App\Filament\Pages;

use App\Models\ContactUs;
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

class ManageContactUs extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhone;

    protected static ?string $navigationLabel = 'Contact Us';

    protected static ?string $slug = 'contact-us';

    protected static ?int $navigationSort = 1;

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function getTitle(): string
    {
        return 'Contact Us';
    }

    public function mount(): void
    {
        $contact = ContactUs::first();

        $this->form->fill($contact?->toArray() ?? []);
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
                Section::make('Main Content')
                    ->schema([
                        TextInput::make('main_heading')
                            ->label('Main Heading')
                            ->required()
                            ->maxLength(255),

                        FileUpload::make('main_image')
                            ->label('Main Image')
                            ->image()
                            ->disk('public')
                            ->directory('contact-us'),

                        TextInput::make('sub_heading')
                            ->label('Sub Heading')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Contact Information')
                    ->schema([
                        Textarea::make('contact_form')
                            ->label('Contact Form')
                            ->rows(4),

                        Textarea::make('contact_detail')
                            ->label('Contact Detail')
                            ->rows(4),

                        TextInput::make('our_office')
                            ->label('Our Office'),

                        TextInput::make('call_us')
                            ->label('Call Us'),

                        TextInput::make('mail_us')
                            ->label('Mail Us'),

                        TextInput::make('location')
                            ->label('Location'),

                        TextInput::make('send_message')
                            ->label('Send Message'),
                    ])
                    ->columns(2),
            ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        ContactUs::updateOrCreate(
            ['id' => ContactUs::first()?->id],
            $data
        );

        Notification::make()
            ->success()
            ->title('Saved')
            ->body('Contact Us information has been updated.')
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
                        ->label('Save Contact Us')
                        ->submit('save')
                        ->keyBindings(['mod+s']),
                ]),
            ]);
    }
}
