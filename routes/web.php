<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\PhotoController;

Route::get('/home', [PhotoController::class, 'index']);

Route::resource('photos', PhotoController::class);

Route::controller(PhotoController::class)->group(function () {
    Route::get('/home', 'index')->name('photo.index');
    Route::get('/home/{id}', 'show')->name('photo.show');
    Route::get('/functionbaru', 'functionbaru');
});

Route::get('/profile', function () {
    return view('profile', [
        'nama' => 'felix',
        'alamat' => 'ar hakim',
        'telp' => '123',
    ]);
});

Route::get('/adminhome', function () {
    return view('admin.home');
});

Route::get('/photohome', [PhotoController::class, 'index']);

Route::get('/', [PhotoController::class, 'index']);
