<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\KeuanganController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\ToiletController;
use App\Http\Controllers\Admin\KritikSaranController;

Route::group(['domain' => ''], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::middleware('can:Admin')->group(function () {
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            // Route::resource('product', ProductController::class);
            Route::resource('food', FoodController::class);
            Route::resource('toilet', ToiletController::class);
            Route::resource('hotel', HotelController::class);
            // Route::resource('keuangan',KeuanganController::class);
            Route::resource('transaksi', TransaksiController::class);
            // Route::get('order', [OrderController::class, 'index'])->name('order.index');
            // Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');
            // Route::patch('order/accept/{order}', [OrderController::class, 'accept'])->name('order.accept');
            // Route::patch('order/reject/{order}', [OrderController::class, 'reject'])->name('order.reject');
            Route::get('logout', [AuthController::class, 'do_logout'])->name('logout');
            Route::get('kritik-saran', [KritikSaranController::class, 'index'])->name('kritik');
            Route::delete('kritik-saran/{kritik_saran}', [KritikSaranController::class, 'destroy'])->name('kritik.destroy');
        });
    });
});
