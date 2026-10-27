<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('question')
                    ->label('Pertanyaan (FAQ)')
                    ->required()
                    ->placeholder('Contoh: Berapa lama estimasi pengerjaan website?'),
                Textarea::make('answer')
                    ->label('Jawaban')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                Toggle::make('is_open_default')
                    ->label('Buka Otomatis Saat Halaman Dimuat')
                    ->default(false),
                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->label('Aktif / Tampilkan di Website')
                    ->default(true)
                    ->required(),
            ]);
    }
}
