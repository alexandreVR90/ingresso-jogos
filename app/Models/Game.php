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

    // Aqui adiciona o cast para que o campo date seja um objeto Carbon automaticamente
    protected $casts = [
        'date' => 'datetime',
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
