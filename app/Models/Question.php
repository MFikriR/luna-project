<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'option_1', 'option_2', 'option_3', 'option_4', 'correct_answer'
    ];

    // Pastikan relasi ke Answer diubah jika menggunakan question_text
    public function answers()
    {
        return $this->hasMany(Answer::class);  // Relasi menggunakan foreign key yang benar
    }

}
