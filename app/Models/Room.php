<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'id', 'name', 'known_language', 'foreign_language', 'max_players', 'created_by',
    ];
}
