<?php

namespace App\Filament\Resources\PricingPlans\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PricingPlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('plan_label')
                    ->label('Kode / Badge Paket')
                    ->placeholder('LANDING / BUSINESS / CUSTOM')
                    ->required()
                    ->default('PLAN'),
                TextInput::make('name')
                    ->label('Nama Paket')
                    ->required()
                    ->placeholder('Contoh: Landing Page Berkelas'),
                TextInput::make('tagline')
                    ->label('Tagline Singkat')
                    ->placeholder('Solusi kilat untuk konversi maksimal'),
                TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->placeholder('Mulai 1.5jt / Custom Sesuai Kebutuhan'),
                TagsInput::make('features')
                    ->label('Daftar Fitur / Benefit')
                    ->placeholder('Ketik fitur lalu tekan Enter')
                    ->columnSpanFull(),
                Toggle::make('is_popular')
                    ->label('Tandai sebagai Paket Paling Populer')
                    ->default(false),
                TextInput::make('popular_badge')
                    ->label('Teks Badge Populer')
                    ->default('Paling Populer'),
                TextInput::make('cta_text')
                    ->label('Teks Tombol')
                    ->required()
                    ->default('Pilih Paket'),
                TextInput::make('cta_link')
                    ->label('Tujuan Link Tombol')
                    ->required()
                    ->default('#contact'),
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
