<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/about_meditation', function () {
    return view('about_meditation');
});
Route::get('/cgpssm_info', function () {
    return view('cgpssm_info');
});
Route::get('/store', [BookController::class, 'store']);

Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});
Route::get('/admin_dash', [AdminController::class, 'index']);
Route::get('/booklist', [AdminController::class, 'booklist']);
Route::get('/userlist', [AdminController::class, 'userlist']);
Route::get('/add-book', [AdminController::class, 'addbook']);
Route::get('/editbook/{book}', [AdminController::class, 'editbook']);
Route::post('/update-book', [AdminController::class, 'updatebook']);
Route::post('/add-book2', [AdminController::class, 'addbook2']);
Route::get('/delete-book/{id}', [AdminController::class, 'deletebook']);
Route::get('/delete-user/{id}', [AdminController::class, 'deleteuser']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
