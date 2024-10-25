<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function viewMateri(){
        return view ('materi');
    }
    public function viewMinigames(){
        return view ('mini-games');
    } 
}
