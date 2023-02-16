<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelItem extends Model
{
    use HasFactory;

    protected $table = 'levelItem';

    protected $fillable = [
      'name',
      'defaultPercentage',
      'currentPercentage'
    ];
}
