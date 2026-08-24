<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->maxLength(120),
                TextInput::make('role')->required()->maxLength(150),
                Textarea::make('quote')->required()->rows(4)->columnSpanFull(),
                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->directory('testimonials')
                    ->visibility('public')
                    ->imageEditor(),
                TextInput::make('sort_order')->numeric()->default(0)->required(),
                Toggle::make('is_active')->label('Active')->default(true),
            ]);
    }
}
