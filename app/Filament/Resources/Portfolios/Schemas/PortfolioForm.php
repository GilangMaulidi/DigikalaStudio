<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Proyek')
                    ->required()
                    ->placeholder('Contoh: Zenith Flow - SaaS Analytics Platform'),
                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'saas' => 'Platform SaaS & Web App',
                        'branding' => 'E-Commerce & Branding',
                        'academic' => 'Sistem Riset & Edukasi',
                    ])
                    ->required()
                    ->default('saas'),
                TextInput::make('browser_url')
                    ->label('Display Browser URL')
                    ->placeholder('zenith.flow.ai'),
                TextInput::make('window_tag')
                    ->label('Tag Header Jendela')
                    ->placeholder('ENTERPRISE'),
                FileUpload::make('image')
                    ->label('Gambar Proyek')
                    ->image()
                    ->disk('public')
                    ->directory('portfolios'),
                TagsInput::make('tags')
                    ->label('Teknologi / Stack Tags')
                    ->placeholder('Tambah tag lalu tekan Enter (contoh: Next.js 14, Tailwind)'),
                Textarea::make('description')
                    ->label('Deskripsi Proyek')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('badge_status')
                    ->label('Badge Status')
                    ->default('Tahun 2026'),
                Toggle::make('is_live')
                    ->label('Indikator Live (Titik Hijau)')
                    ->default(true),
                TextInput::make('project_url')
                    ->label('Link Proyek / Tombol')
                    ->default('#kolaborasi'),
                TextInput::make('action_label')
                    ->label('Teks Tombol Aksi')
                    ->default('Eksplorasi Proyek'),
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
