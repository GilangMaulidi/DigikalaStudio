<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = [];

    protected $casts = [
        'rating' => 'integer',
        'is_active' => 'boolean',
    ];

    public function getAvatarUrlAttribute(): string
    {
        if (empty($this->client_avatar)) {
            return asset('images/avatar1.png');
        }
        if (str_starts_with($this->client_avatar, 'http://') || str_starts_with($this->client_avatar, 'https://') || str_starts_with($this->client_avatar, 'images/')) {
            return asset($this->client_avatar);
        }
        return asset('storage/' . $this->client_avatar);
    }
}
