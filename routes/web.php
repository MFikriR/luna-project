<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MiniGamesController;
use App\Http\Controllers\DragAndDropController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Static

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/daftarmateri', [LandingPageController::class, 'lihatMateri'])->name('lihatMateri');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/drag-and-drop', [DragAndDropController::class, 'index'])->name('drag-and-drop');
Route::get('/video-tutorials', [TutorialController::class, 'showVideoTutorials'])->name('video-tutorials');

Route::get('/materi', [DashboardController::class,'viewMateri'])->name('materi');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/chapter1', function () {
    return view('chapter1');
})->name('chapter1');

Route::get('/chapter2', function () {
    return view('chapter2');
})->name('chapter2');

// KI & KD
Route::get('/kikd', function () {
    return view('KI&KD');
})->name('kikd');


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
Route::get('/mini-games', [DashboardController::class, 'viewMinigames'])->name('mini-games');

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

// ADMIN (Do not change the route name)
// Rute untuk menampilkan form login admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Rute untuk menangani proses login admin
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Rute untuk dashboard admin, dilindungi oleh middleware auth:admin
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Daftar Siswa
Route::get('/admin/daftar-siswa', [UserController::class, 'index'])->name('admin.daftar-siswa');
Route::get('/siswa/{id}/edit', [UserController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [UserController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [UserController::class, 'destroy'])->name('siswa.destroy');

// Tambah Siswa
Route::get('/admin/tambah-siswa', [UserController::class, 'create'])->name('admin.tambah-siswa');
Route::post('/admin/tambah-siswa', [UserController::class, 'store'])->name('admin.simpan-siswa');
// ----------------------------------------------------------------------------------------------------------- //

// Routes yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
// Route lainnya yang hanya dapat diakses setelah login
});



// routes/web.php
Route::get('/tebak_arti_game', [GameController::class, 'index'])->name('tebak_arti_game');
Route::post('/tebak_arti_game/check', [GameController::class, 'checkAnswer'])->name('tebak_arti_game.check');




// Route untuk halaman percakapan game
Route::get('/percakapan-game', [GameController::class, 'showPercakapanGame'])->name('percakapan_game');


Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/bab1/page/{page}', [MateriController::class, 'bab1'])->name('bab1.page');
Route::get('/bab1/page1', function () {
    return view('bab1.page1');
});

Route::get('/bab1/page2', function () {
    return view('bab1.page2');
});

Route::get('/bab1/page3', function () {
    return view('bab1.page3');
});
