<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
        'is_live' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('images/project1.png');
        }
        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://') || str_starts_with($this->image, 'images/')) {
            return asset($this->image);
        }
        return asset('storage/' . $this->image);
    }
}
