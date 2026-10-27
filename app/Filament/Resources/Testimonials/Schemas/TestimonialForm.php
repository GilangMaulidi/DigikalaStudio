<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('client_name')
                    ->label('Nama Klien')
                    ->required()
                    ->placeholder('Contoh: Raymond Tan'),
                TextInput::make('client_role')
                    ->label('Jabatan / Perusahaan')
                    ->required()
                    ->placeholder('Contoh: Founder, Zenith Flow Singapore'),
                FileUpload::make('client_avatar')
                    ->label('Foto / Avatar Klien')
                    ->image()
                    ->disk('public')
                    ->directory('testimonials'),
                TextInput::make('verified_badge')
                    ->label('Teks Badge Verifikasi')
                    ->required()
                    ->default('VERIFIED CLIENT'),
                Select::make('rating')
                    ->label('Rating Bintang')
                    ->options([
                        5 => '⭐⭐⭐⭐⭐ (5 Bintang)',
                        4 => '⭐⭐⭐⭐ (4 Bintang)',
                        3 => '⭐⭐⭐ (3 Bintang)',
                    ])
                    ->required()
                    ->default(5),
                Textarea::make('quote')
                    ->label('Ulasan / Testimoni')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                TextInput::make('project_tag')
                    ->label('Tag Proyek Terkait')
                    ->placeholder('Contoh: Full-stack Development'),
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
