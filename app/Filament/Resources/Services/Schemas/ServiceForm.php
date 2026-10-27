<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('step_number')
                    ->label('Nomor Urut / Badge')
                    ->placeholder('Contoh: 01')
                    ->required()
                    ->default('01'),
                TextInput::make('title')
                    ->label('Nama Layanan')
                    ->required()
                    ->placeholder('Contoh: Custom Web Development'),
                TextInput::make('icon')
                    ->label('Identifier Icon / Catatan Icon')
                    ->placeholder('code / design / rocket / etc.'),
                Textarea::make('description')
                    ->label('Deskripsi Layanan')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TagsInput::make('features')
                    ->label('Poin Fitur & Keunggulan Layanan')
                    ->placeholder('Ketik poin fitur lalu tekan Enter')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->label('Urutan Tampilan')
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
