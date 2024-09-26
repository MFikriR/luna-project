<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DragAndDropController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LatihanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/drag-and-drop', [DragAndDropController::class, 'index'])->name('drag-and-drop');
Route::get('/video-tutorials', [TutorialController::class, 'showVideoTutorials'])->name('video-tutorials');

// Route untuk menampilkan halaman quiz
Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('quiz');
// Route untuk memproses jawaban yang dikirim dari form
Route::post('/quiz/submit', [QuizController::class, 'submitAnswer'])->name('quiz.submit');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CustomAuthController::class, 'login'])->name('login.store');


Route::get('/latihan', [LatihanController::class, 'show'])->name('latihan');
Route::post('/latihan-submit', [LatihanController::class, 'submit'])->name('latihan.submit');


Route::get('/forum', [ForumController::class, 'index']);