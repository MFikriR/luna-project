<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function showVideoTutorials()
    {
        return view('video-tutorials'); // Mengarahkan ke view video-tutorials
    }
}