<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'name',
        'price',
        'quantity',
        'start_date',
        'end_date',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
