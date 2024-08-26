
<?php

// Роуты в нескольких файлах настраиваются в bootstrap/app.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController ;


Route::redirect('/admin', '/admin/posts')->name('admin');

Route::prefix('admin')->middleware('auth')->group(function(){
    // метод GET                       //это метод (action)  //это название маршрута, можно писать ->name('posts')
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show')->whereNumber('post');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

});