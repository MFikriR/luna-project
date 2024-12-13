<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
    protected $fillable = ['user_id', 'score', 'attempts', 'is_final'];

    public function user()
    {
        return $this->belongsTo(User::class);  // Relasi ke model User
    }
}
