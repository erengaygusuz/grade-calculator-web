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

    public function levelItems()
    {
        return $this->belongsTo(LevelItem::class);
    }
}
