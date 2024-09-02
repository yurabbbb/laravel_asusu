<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\PostController as UserPostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LogMiddleware;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::redirect('/home', '/')->name('home');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');

Route::get('test', TestController::class)->name('test')->middleware(LogMiddleware::class); // тут метод не указан, поэтому используется invoke

//Route::get('test', TestController::class)->name('test')->middleware(LogMiddleware::class); 
    // с мидлвэром


// CRUD 
//Route::redirect('/user', '/user/posts')->name('user');  // со страницы юзер на страницу юзер/посты

Route::prefix('user')->group(function(){           // -> middleware( 'auth', 'active' ) мидлвэр авторизован, активен

    Route::redirect('/', '/user/posts')->name('user');
        // метод GET                       //это метод (action)  //это название маршрута, можно писать ->name('posts')
    Route::get('posts', [UserPostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [UserPostController::class, 'create'])->name('posts.create');
    Route::post('posts', [UserPostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [UserPostController::class, 'show'])->name('posts.show')->whereNumber('post');
    Route::get('posts/{post}/edit', [UserPostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [UserPostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [UserPostController::class, 'delete'])->name('posts.delete');
    Route::put('posts/{post}/like', [UserPostController::class, 'like'])->name('posts.like');

});


    

//Route::get('login', [PostController::class, 'login'])->name('login');

//ресурс вложенный
Route::resource('posts/{post}/comments', CommentController::class);

//можно не вложенный
//Route::resource('comments', CommentController::class)     ->only(['index', 'show']);  ->except()

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->name('login.store')->middleware('guest');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


Route::fallback(function(){
    return 'fallback';
 });