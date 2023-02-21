<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelItem extends Model
{
    use HasFactory;

    protected $table = 'level_item';

    protected $fillable = [
      'name',
      'defaultPercentage',
      'currentPercentage'
    ];

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'level_level_item');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
