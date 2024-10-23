<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DragAndDropController;
use App\Http\Controllers\LandingPageController;


Route::get('/', function () {
    return view('welcome');
});

// Static

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/daftarmateri', [LandingPageController::class, 'lihatMateri'])->name('lihatMateri');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/drag-and-drop', [DragAndDropController::class, 'index'])->name('drag-and-drop');
Route::get('/video-tutorials', [TutorialController::class, 'showVideoTutorials'])->name('video-tutorials');

Route::get('/materi', [DashboardController::class,'viewMateri'])->name('materi');


// Route untuk menampilkan halaman quiz
Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('quiz');
// Route untuk memproses jawaban yang dikirim dari form
Route::post('/quiz/submit', [QuizController::class, 'submitAnswer'])->name('quiz.submit');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// Login dan Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/latihan', [LatihanController::class, 'show'])->name('latihan');
Route::post('/latihan-submit', [LatihanController::class, 'submit'])->name('latihan.submit');


Route::get('/forum', [ForumController::class, 'index'])->name(name: 'forum');

Route::get('/bab1', function () {
    return view('bab1');
})->name('bab1');

Route::get('/bab2', function () {
    return view('bab2');
})->name('bab2');

Route::get('/bab3', function () {
    return view('bab3');
})->name('bab3');

Route::get('/bab4', function () {
    return view('bab4');
})->name('bab4');

Route::get('/bab5', function () {
    return view('bab5');
})->name('bab5');
// Tambahkan routes untuk bab-bab lainnya


// Route untuk halaman utama Mini Games
Route::get('/mini-games', function () {
    return view('mini-games'); // Mengarah ke view mini_games.blade.php
})->name('mini-games');

// Route untuk game Drag and Drop
Route::get('/mini-games/drag-and-drop', function () {
    return view('games.drag_and_drop'); // Mengarah ke view drag_and_drop.blade.php
})->name('drag_and_drop_game');

// Route untuk game Tebak Arti
Route::get('/mini-games/tebak-arti', function () {
    return view('games.tebak_arti'); // Mengarah ke view tebak_arti.blade.php
})->name('tebak_arti_game');

// Route untuk game Percakapan
Route::get('/mini-games/percakapan', function () {
    return view('games.percakapan'); // Mengarah ke view percakapan.blade.php
})->name('percakapan_game');