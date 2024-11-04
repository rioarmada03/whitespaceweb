<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;



Route::get('/', [homeController::class, 'home'])->name('home');
// Route::resource('task', TaskController::class);


Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Route for showing the form to create a new task
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
// Route for storing a new task
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Route for showing the form to edit an existing task
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Route for updating an existing task
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Route for deleting a task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

// Route for 
// Route::post('/ratings', [RatingController::class, 'store'])->name('comments.store');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

// Rute untuk bagian register 
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('register', [RegisterController::class, 'register'])->name('register');

// (link Route::get('login' ) sedangkan ( Variable ->name('login'))
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Task routes
Route::resource('tasks', TaskController::class)->middleware('auth');


// Comment Route
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');