<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumTopic;
use App\Models\ForumPost;

class ForumController extends Controller
{
    // Menampilkan daftar topik forum
    public function index()
    {
        $topics = ForumTopic::all(); // Mengambil semua topik
        return view('forum.index', compact('topics'));
    }

    // Menampilkan detail topik dengan postingan
    public function show($id)
    {
        $topic = ForumTopic::findOrFail($id); // Mencari topik berdasarkan ID
        $posts = ForumPost::where('topic_id', $id)->get(); // Mengambil semua posting di topik tersebut
        return view('forum.show', compact('topic', 'posts'));
    }

    // Menambahkan posting baru
    public function store(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string'
        ]);

        ForumPost::create([
            //'topic_id' => $id,
            //'user_id' => auth()->id(), // Mengambil ID pengguna yang login
            //'content' => $request->content
        ]);

        return redirect()->route('forum.show', $id);
    }
}
