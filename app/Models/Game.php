<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
    ];

    public function lots()
    {
        return $this->hasMany(Lot::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
