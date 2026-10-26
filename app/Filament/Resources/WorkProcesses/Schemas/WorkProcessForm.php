<?php

namespace App\Filament\Resources\WorkProcesses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class WorkProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('step_number')
                    ->label('Nomor Langkah')
                    ->placeholder('Contoh: 01')
                    ->required()
                    ->default('01'),
                TextInput::make('phase_tag')
                    ->label('Tag Fase')
                    ->placeholder('Contoh: FASE 01 — RISET & ARSITEKTUR')
                    ->required(),
                TextInput::make('title')
                    ->label('Judul Langkah')
                    ->required()
                    ->placeholder('Contoh: Discovery & Blueprint Arsitektur'),
                Textarea::make('description')
                    ->label('Deskripsi Proses')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
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
