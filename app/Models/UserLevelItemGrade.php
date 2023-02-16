<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevelItemGrade extends Model
{
    use HasFactory;

    protected $table = '';

    protected $fillable = [
        'user_id',
        'level_id',
        'level_item_id',
        'grade'
    ];
}
