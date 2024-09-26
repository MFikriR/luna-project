<?php

// ForumTopic.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function posts()
    {
        return $this->hasMany(ForumPost::class);
    }
}