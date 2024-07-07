<?php

use App\Http\Controllers\Admin\NewsControllerAdmin;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'index']);
Route::get('/beranda', [NewsController::class, 'index']);

Route::get('/berita/{slug}', [NewsController::class, 'show']);

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('news', NewsControllerAdmin::class);
});

