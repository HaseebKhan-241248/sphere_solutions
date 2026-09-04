<?php

namespace App\Filament\Resources\Invoices\Tables;

use App\Actions\SendInvoiceToClient;
use App\Models\Invoice;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Throwable;

class InvoicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client.name')
                    ->searchable(),
                TextColumn::make('invoice_number')
                    ->searchable(),
                TextColumn::make('invoice_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('currency')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('subtotal')
                    ->formatStateUsing(fn ($state, Invoice $record): string => $record->formatAmount($state))
                    ->sortable(),
                TextColumn::make('gst_rate')
                    ->numeric()
                    ->suffix('%')
                    ->sortable(),
                TextColumn::make('gst_amount')
                    ->formatStateUsing(fn ($state, Invoice $record): string => $record->formatAmount($state))
                    ->sortable(),
                TextColumn::make('grand_total')
                    ->label('Grand Total')
                    ->formatStateUsing(fn ($state, Invoice $record): string => $record->formatAmount($state))
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('downloadPdf')
                    ->label('PDF')
                    ->icon(Heroicon::OutlinedArrowDownTray)
                    ->url(fn ($record): string => route('admin.invoices.pdf', ['invoice' => $record]))
                    ->openUrlInNewTab(),
                self::sendEmailAction(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function sendEmailAction(): Action
    {
        return Action::make('sendEmail')
            ->label('Send Email')
            ->icon(Heroicon::OutlinedEnvelope)
            ->color('success')
            ->requiresConfirmation()
            ->modalHeading('Send invoice email')
            ->modalDescription(function (Invoice $record): string {
                $record->loadMissing('client');

                $email = $record->client?->email;

                if (! filled($email)) {
                    return 'This client does not have an email address. Add one on the Clients page first.';
                }

                return 'Send invoice '.$record->invoice_number.' with PDF attachment to '.$email.'?';
            })
            ->modalSubmitActionLabel('Send email')
            ->disabled(fn (Invoice $record): bool => ! filled($record->client?->email))
            ->tooltip(fn (Invoice $record): ?string => filled($record->client?->email)
                ? null
                : 'Client has no email address')
            ->action(function (Invoice $record): void {
                try {
                    app(SendInvoiceToClient::class)($record);

                    Notification::make()
                        ->title('Invoice emailed')
                        ->body('Sent to '.$record->client?->email)
                        ->success()
                        ->send();
                } catch (Throwable $exception) {
                    Notification::make()
                        ->title('Could not send invoice email')
                        ->body($exception->getMessage())
                        ->danger()
                        ->send();
                }
            });
    }
}
