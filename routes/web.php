<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

Route::get('/tamu', [TamuController::class, 'index'])->name('tamu.index');
Route::get('/tamu/create', [TamuController::class, 'create'])->name('tamu.create');
Route::post('/tamu', [TamuController::class, 'store'])->name('tamu.store');
Route::resource('tamu', TamuController::class);































// Route::get('/as', function () {
//     $username = 'Jike';
//     if($username === 'Jiko') {
//         echo 'Halo dek';
//     } else {
//     echo 'Hi ' . $username;
//     }
// });

// Route::post('/article/create', function () {
//     $article = [
//         "title" => request('title'),
//         "description" => request('description'),
//         "slug" => request('slug'),
//     ];

//     return $article;


// });

// // Route::get('/about/{user}/{title}', function ($user, $title) {
// //     return 'about ' . $user . ' titlenya ' . $title;
// // });

// Route::get('/about', function () {
//     $sort = request('sort');
//     $page = request('page');

//     return $sort . ' Halaman ' . $page;
// });

// Route::get('/article', [ArticleController::class, 'index']);
// Route::get('/article/detail/{slug}', [ArticleController::class, 'show']);
