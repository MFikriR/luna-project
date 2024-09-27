<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    // Method untuk menampilkan halaman forum
    public function index()
    {
        // Data topik forum statis yang terkait dengan materi pembelajaran bahasa Inggris
        $topics = [
            [
                'title' => 'How to Introduce Yourself in English',
                'description' => 'Learn how to give a proper introduction about yourself in English.',
            ],
            [
                'title' => 'Common Phrases for Self-Description',
                'description' => 'Discuss various phrases and expressions to describe yourself effectively.',
            ],
            [
                'title' => 'Talking About Your Hobbies and Interests',
                'description' => 'Share tips on how to talk about your hobbies and interests during self-introductions.',
            ],
            [
                'title' => 'Describing Other People',
                'description' => 'Learn how to describe other people’s physical appearance and personality.',
            ],
        ];

        // Mengirim data topik ke view forum
        return view('forum', compact('topics'));
    }
}