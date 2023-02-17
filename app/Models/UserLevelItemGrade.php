<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevelItemGrade extends Model
{
    use HasFactory;

    protected $table = 'user_level_item_grade';

    protected $fillable = [
        'user_id',
        'level_id',
        'level_item_id',
        'grade'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo(LevelLevelItem::class, 'level_id', 'level_id');
    }

    public function levelItem()
    {
        return $this->belongsTo(LevelLevelItem::class, 'level_item_id', 'level_item_id');
    }
}
