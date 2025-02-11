<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
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

Route::get('/',[HomeContoller::class,'home'] )->name('welcome');
Route::get('blog-details/{blog_id}',[HomeContoller::class,'detail'] )->name('blog.detail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function(){
    Route::get('add_type', [TypeController::class, 'add'])->name('admin.add_type');
    Route::post('store_type', [TypeController::class, 'store'])->name('admin.store.type');
    Route::get('/all_type', [TypeController::class, 'all'])->name('admin.all.type');
    Route::get('/edit_type/{type_id}', [TypeController::class, 'edit'])->name('admin.type.edit');
    Route::post('/update_type/{type_id}', [TypeController::class, 'update'])->name('admin.type.update');

    Route::get('add_room', [RoomController::class, 'add'])->name('admin.add_room');
    Route::post('room_store', [RoomController::class, 'store'])->name('admin.room.store');
    Route::get('/all_room', [RoomController::class, 'all'])->name('admin.all.room');
    Route::get('/edit_room/{room_id}', [RoomController::class, 'edit'])->name('admin.room.edit');
    Route::post('/update_room/{room_id}', [RoomController::class, 'update'])->name('admin.room.update');

    Route::get('add_blog', [BlogController::class, 'add'])->name('admin.add.blog');
    Route::post('store_blog', [BlogController::class, 'store'])->name('admin.store.blog');

    Route::get('add_offer', [OfferController::class, 'add'])->name('admin.add.offer');
    Route::post('/store_offer', [OfferController::class, 'store'])->name('admin.store.offer');
    Route::get('/all_offer', [OfferController::class, 'all'])->name('admin.all.offer');
    Route::get('/edit_offer/{offer_id}', [OfferController::class, 'edit'])->name('admin.offer.edit');
    Route::post('/update_offer/{offer_id}', [OfferController::class, 'update'])->name('admin.offer.update');



});

require __DIR__.'/auth.php';
