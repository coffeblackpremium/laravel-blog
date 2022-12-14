<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Blog\{
    ShowBlog
};
use App\Http\Livewire\ShowPost;
use App\Http\Livewire\User\UploadPhoto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is   where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//BLOG Rotas
Route::resource('blog', BlogController::class);
Route::resource('posts', PostController::class)->only('index', 'create');
Route::get('posts/{tema}/{slug}', [PostController::class, 'showPost'])->name('showPost');


Route::get('user/upload', UploadPhoto::class);



// Route::get('/blog/create-posts/', function() {
//     return view('create-post');
// });





// Jetstream Rotas
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
