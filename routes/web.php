<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\GalerryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LikeController;
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

// Route::get('/p', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [GalerryController::class, 'index'])->name('dash');

Route::post('/like/{foto}', [FotoController::class, 'toggleLike'])->name('like.toggle');

Route::post('/gallery/{foto}/comment', [FotoController::class, 'storeComment'])->name('foto.comment');
Route::get('/detail/{foto}', [FotoController::class, 'showfoto'])->name('foto.showfoto');

Route::get('/category', [GalerryController::class, 'show']);
Route::get('/category/boba', [GalerryController::class, 'boba']);
Route::get('/category/coffe', [GalerryController::class, 'coffe']);
Route::get('/category/oursignature', [GalerryController::class, 'oursignature']);


Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/dataFoto', function () {
    return view('admin.dataFoto');
});

Route::get('/tambahFoto', function () {
    return view('admin.tambahFoto');
});


Route::get('/dataFoto', [FotoController::class, 'index']);
Route::get('/tambahFoto', [FotoController::class, 'create'])->name('tambahFoto');  
Route::post('/tambahFoto', [FotoController::class, 'store'])->name('simpann');  
Route::get('/editFoto/{FotoID}', [FotoController::class, 'edit'])->name('editFoto');  
Route::put('/updateFoto/{FotoID}', [FotoController::class, 'update']);  
Route::get('/hapusFoto/{FotoID}', [FotoController::class, 'delete']);  


Route::get('/albumAdmin', [AlbumController::class, 'index'])->name('albumDashboard');
Route::get('/tambahAlbum', [AlbumController::class, 'create']);  
Route::post('/tambahAlbum', [AlbumController::class, 'store'])->name('simpan'); 

require __DIR__.'/auth.php'; 



