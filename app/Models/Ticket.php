<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'game_id',
        'lot_id',
        'qr_code',
        'status',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function lot()
    {
        return $this->belongsTo(Lot::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
