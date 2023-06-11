<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Operator\OrderController;
use App\Http\Controllers\Operator\HotelController;
use App\Http\Controllers\Operator\DashboardController;
use App\Http\Controllers\Operator\BookingController;
use App\Http\Controllers\Operator\NotificationController;

Route::prefix('operator/')->name('operator.')->group(function () {
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::post('login', [AuthController::class, 'do_login'])->name('login');
    });
    Route::middleware('can:Operator')->group(function () {
        Route::redirect('/', 'dashboard', 301);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('logout', [AuthController::class, 'do_logout'])->name('logout');

        Route::resource('booking', BookingController::class)->only(['create']);
        // Route::resource('hotel', HotelController::class);
        Route::resource('order', OrderController::class)->only(['create']);


        Route::get('hotel', [HotelController::class, 'index'])->name('hotel.index');
        Route::get('hotel/pdf', [HotelController::class, 'pdf'])->name('hotel.pdf');
        Route::get('hotel/{hotel}', [HotelController::class, 'show'])->name('hotel.show');
        Route::patch('hotel/accept/{hotel}', [HotelController::class, 'accept'])->name('hotel.accept');
        Route::patch('hotel/reject/{hotel}', [HotelController::class, 'reject'])->name('hotel.reject');

        Route::get('order', [OrderController::class, 'index'])->name('order.index');
        Route::post('order/makeOrder', [OrderController::class, 'makeOrder'])->name('order.makeOrder');
        Route::get('order/pdf', [OrderController::class, 'pdf'])->name('order.pdf');
        Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');
        Route::patch('order/accept/{order}', [OrderController::class, 'accept'])->name('order.accept');
        Route::patch('order/reject/{order}', [OrderController::class, 'reject'])->name('order.reject');
        Route::put('order/finish/{order}', [OrderController::class, 'finish'])->name('order.finish');

        Route::get('booking', [BookingController::class, 'index'])->name('booking.index');
        Route::post('booking/makeBooking', [BookingController::class, 'makebooking'])->name('booking.makeBooking');
        // Route::get('booking/{booking}', [BookingController::class, 'show'])->name('booking.show');
        Route::get('booking/pdf', [BookingController::class, 'pdf'])->name('booking.pdf');
        Route::patch('booking/accept/{booking}', [BookingController::class, 'accept'])->name('booking.accept');
        Route::patch('booking/reject/{booking}', [BookingController::class, 'reject'])->name('booking.reject');
        Route::delete('booking/destroy/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');
        Route::put('booking/finish/{booking}', [BookingController::class, 'finish'])->name('booking.finish');


        Route::get('counter', [NotificationController::class, 'counter'])->name('counter_notif');
        Route::get('notification', [NotificationController::class, 'index'])->name('notification.index');
    });
});
