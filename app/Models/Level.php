<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'level';

    protected $fillable = [
      'name'
    ];

    public function levelItems()
    {
        return $this->belongsToMany(LevelItem::class, 'level_level_item');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'option_level');
    }
}
