<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAll extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'game_alls';
}
