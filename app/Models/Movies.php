<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    /** @use HasFactory<\Database\Factories\MoviesFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'duration',
        'idmp_rating',
        'release_date',
        'season',
        'is_active',
    ];
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
