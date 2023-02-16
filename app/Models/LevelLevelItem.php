<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelLevelItem extends Model
{
    use HasFactory;

    protected $table = 'level_level_item';

    protected $fillable = [
        'level_id',
        'level_item_id'
    ];
}
