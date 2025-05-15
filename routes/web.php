<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Admin\Developers\DeveloperList;
use App\Livewire\Admin\Articles\ArticleList;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

// ROTAS PÚBLICAS PARA REGISTRO DE ADMIN (sem autenticação)
Route::get('/admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'registerAdmin']);

// ROTAS ADMIN COM AUTENTICAÇÃO
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/users', [AdminController::class, 'manageUsers']);
});

// OUTRAS ROTAS
Route::get('/articles', ArticleList::class)
    ->name('articles.index')
    ->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/', function () {
    $articleFeatures = App\Models\Article::orderBy('view', 'desc')->take(10)->get();
    $articles = App\Models\Article::latest()->take(10)->get();
    return view('welcome', compact('articles', 'articleFeatures'));
})->name('home');

// ÁREA ADMIN (COM PREFIXO E AUTH)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/developers', DeveloperList::class)->name('developers.index');
});

// DASHBOARD PADRÃO
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// CONFIGURAÇÕES DE USUÁRIO
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
