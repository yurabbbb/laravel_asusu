
<?php

// Роуты в нескольких файлах настраиваются в bootstrap/app.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController ;




Route::prefix('admin')->middleware('admin')->group(function(){

    Route::redirect('/', '/admin/posts')->name('admin');
    // метод GET                       //это метод (action)  //это название маршрута, можно писать ->name('posts')
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show')->whereNumber('post');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');

});