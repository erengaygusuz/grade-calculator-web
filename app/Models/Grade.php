<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grade';

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
        return $this->belongsTo('level_level_item', 'level_id', 'level_id');
    }

    public function levelItem()
    {
        return $this->belongsTo('level_level_item', 'level_item_id', 'level_item_id');
    }
}
