<?php

    use App\Http\Controllers\Dashboard;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/typography',[HomeController::class,'typography'])->name('typography');
Route::get('/alerts',[HomeController::class,'alerts'])->name('alerts');
Route::get('/buttons',[HomeController::class,'buttons'])->name('buttons');
Route::get('/email',[HomeController::class,'email'])->name('email');

Route::get('/dashboard',[Dashboard::class,'index'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
