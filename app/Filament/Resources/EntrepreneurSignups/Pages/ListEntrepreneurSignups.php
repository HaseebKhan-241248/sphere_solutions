<?php

namespace App\Filament\Resources\EntrepreneurSignups\Pages;

use App\Filament\Resources\EntrepreneurSignups\EntrepreneurSignupResource;
use App\Models\EntrepreneurSignup;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ListEntrepreneurSignups extends ListRecords
{
    protected static string $resource = EntrepreneurSignupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportCsv')
                ->label('Download CSV')
                ->icon('heroicon-o-arrow-down-tray')
                ->action(fn (): StreamedResponse => $this->exportCsv()),
        ];
    }

    protected function exportCsv(): StreamedResponse
    {
        $filename = 'entrepreneur-signups-'.now()->format('Y-m-d-His').'.csv';

        return response()->streamDownload(function (): void {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, [
                'Name',
                'Email',
                'Country / City',
                'Main Skill',
                'Additional Skills',
                'LinkedIn / Portfolio',
                'Message',
                'Consent',
                'Submitted From',
                'Submission Date',
            ]);

            EntrepreneurSignup::query()
                ->orderByDesc('created_at')
                ->chunk(200, function ($signups) use ($handle): void {
                    foreach ($signups as $signup) {
                        fputcsv($handle, [
                            $signup->name,
                            $signup->email,
                            $signup->location,
                            $signup->main_skill,
                            $signup->additional_skills,
                            $signup->portfolio_url,
                            $signup->message,
                            $signup->consent ? 'Yes' : 'No',
                            $signup->submitted_from,
                            optional($signup->created_at)?->toDateTimeString(),
                        ]);
                    }
                });

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv',
        ]);
    }
}
