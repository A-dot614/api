<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    /** @use HasFactory<\Database\Factories\ApiFactory> */
    use HasFactory;

    /**
     * Attributes that may be set through Api::create().
     *
     * @var list<string>
     */
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
