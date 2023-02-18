<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOption extends Model
{
    use HasFactory;

    protected $table = 'user_option';

    protected $fillable = [
      'user_id',
      'option_id'
    ];

    public function option()
    {
        return $this->belongsTo(Option::class, 'option_id', 'id');
    }
}
