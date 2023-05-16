<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Operator\OrderController;
use App\Http\Controllers\Operator\HotelController;
// use App\Http\Controllers\Operator\ProductController;
// use App\Http\Controllers\Operator\KeuanganController;
use App\Http\Controllers\Operator\DashboardController;
use App\Http\Controllers\Operator\BookingController;
// use App\Http\Controllers\Operator\KamarMandiController;
// use App\Http\Controllers\Operator\PenginapanController;
// use App\Http\Controllers\Operator\KritikSaranController;

Route::group(['domain' => ''], function () {
    Route::prefix('operator/')->name('operator.')->group(function () {
        Route::prefix('auth')->name('auth.')->group(function () {
            Route::post('login', [AuthController::class, 'do_login'])->name('login');
        });
        Route::middleware('can:Operator')->group(function () {
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('logout', [AuthController::class, 'do_logout'])->name('logout');
            Route::resource('booking', BookingController::class);
            Route::resource('food', OrderController::class);
            Route::resource('hotel', HotelController::class);
            //     Route::resource('kamarmandi',KamarMandiController::class);
            //     Route::resource('penginapan',PenginapanController::class);
            //     Route::resource('keuangan',KeuanganController::class);
            Route::get('order', [OrderController::class, 'index'])->name('order.index');
            Route::get('order/pdf', [OrderController::class, 'pdf'])->name('order.pdf');
            Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');
            Route::patch('order/accept/{order}', [OrderController::class, 'accept'])->name('order.accept');
            Route::patch('order/reject/{order}', [OrderController::class, 'reject'])->name('order.reject');


            Route::get('booking', [BookingController::class, 'index'])->name('booking.index');
            Route::get('booking/{booking}', [BookingController::class, 'show'])->name('booking.show');
            Route::patch('booking/accept/{booking}', [BookingController::class, 'accept'])->name('booking.accept');
            Route::patch('booking/reject/{booking}', [BookingController::class, 'reject'])->name('booking.reject');
            Route::delete('booking/destroy/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');
        });
    });
});
