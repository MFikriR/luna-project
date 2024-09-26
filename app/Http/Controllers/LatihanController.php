<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function show()
    {
        return view('latihan');
    }

    public function submit(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'intro_translation' => 'required',
            'selfdesc_translation' => 'required',
        ]);

        // Simpan hasil terjemahan dalam session untuk ditampilkan di halaman yang sama
        $results = [
            'intro_translation' => $request->input('intro_translation'),
            'selfdesc_translation' => $request->input('selfdesc_translation'),
        ];

        return redirect()->route('latihan')->with('results', $results);
    }
}