<?php

namespace App\Filament\Pages;

use App\Support\InvoiceSettings;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
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

class ManageInvoiceSettings extends Page
{
    protected static string|UnitEnum|null $navigationGroup = 'Invoices';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $navigationLabel = 'Invoice Settings';

    protected static ?string $slug = 'invoice-settings';

    protected static ?int $navigationSort = 99;

    public ?array $data = [];

    public function getTitle(): string
    {
        return 'Invoice Settings';
    }

    public function mount(): void
    {
        $this->form->fill(InvoiceSettings::formState());
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Invoice footer content')
                ->schema([
                    Textarea::make(InvoiceSettings::PAYMENT_INSTRUCTIONS)
                        ->label('Payment Instructions')
                        ->rows(6)
                        ->columnSpanFull(),
                    Textarea::make(InvoiceSettings::NOTES)
                        ->label('Notes')
                        ->rows(6)
                        ->columnSpanFull(),
                ]),
        ]);
    }

    public function save(): void
    {
        InvoiceSettings::saveMany($this->form->getState());

        Notification::make()
            ->success()
            ->title('Saved')
            ->body('Invoice settings updated.')
            ->send();
    }

    public function content(Schema $schema): Schema
    {
        return $schema->components([$this->getFormContentComponent()]);
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
