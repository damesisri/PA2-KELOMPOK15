<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\FoodController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\RegionalController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\PemandianController;
use App\Http\Controllers\Web\PenginapanController;
use App\Http\Controllers\Web\KritikSaranController;

Route::group(['domain' => ''], function () {
    Route::get('auth', [AuthController::class, 'index'])->name('auth.index');
    Route::post('auth/login', [AuthController::class, 'do_login'])->name('auth.login');
    Route::get('auth/register', [AuthController::class, 'register'])->name('register');
    Route::post('auth/register', [AuthController::class, 'do_register'])->name('auth.register');

    Route::prefix('')->name('web.')->group(function () {
        Route::get('penginapan', [PenginapanController::class, 'index'])->name('penginapan');
        Route::get('penginapan/{id}/detail', [PenginapanController::class, 'detail'])->name('penginapan.detail');
        Route::get('penginapan/{id}/create', [PenginapanController::class, 'create'])->name('penginapan.create');
        Route::post('penginapan/{id}/store', [PenginapanController::class, 'store'])->name('penginapan.store')->middleware('auth');
        // Route::get('penginapan/booking', [PenginapanController::class, 'booking'])->name('penginapan.booking');
        Route::post('penginapan/check', [PenginapanController::class, 'check'])->name('penginapan.check');

        Route::get('food', [FoodController::class, 'index'])->name('food');
        Route::get('food/{food}', [FoodController::class, 'detail'])->name('food.detail');
        // Route::get('check', [PenginapanController::class, 'check'])->name('check');


        Route::get('pemandian', [PemandianController::class, 'index'])->name('pemandian');
        Route::post('pemandian/{toilet}/store', [PemandianController::class, 'store'])->name('pemandian.store')->middleware('auth');
        Route::get('pemandian/{id}/detail', [PemandianController::class, 'detail'])->name('booking.detail');
        Route::post('pemandian/{id}/book', [PemandianController::class, 'makeBooking'])->name('pemandian.book');
        Route::get('pemandian/create', [PemandianController::class, 'create'])->name('pemandian.create');
        Route::get('pemandian/pdf', [PemandianController::class, 'pdf'])->name('pemandian.pdf');


        Route::get('kritik-saran', [KritikSaranController::class, 'index'])->name('kritik');
        Route::post('kritik-saran/store', [KritikSaranController::class, 'store'])->name('kritik.store');


        // Route::middleware('can:User')->group(function () {
        Route::redirect('/', 'dashboard', 301);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // CART
        Route::get('counter_cart', [CartController::class, 'notif'])->name('counter_cart');
        Route::get('cart', [CartController::class, 'index'])->name('cart.index');
        Route::post('cart/add', [CartController::class, 'store'])->name('cart.add');
        Route::patch('cart/increase/{cart}', [CartController::class, 'increase'])->name('cart.increase');
        Route::patch('cart/decrease/{cart}', [CartController::class, 'decrease'])->name('cart.decrease');
        Route::patch('cart/update/{cart}', [CartController::class, 'update'])->name('cart.update');
        Route::delete('cart/delete/{cart}', [CartController::class, 'destroy'])->name('cart.delete');


        // Checkout
        Route::get('checkout/customer', [CheckoutController::class, 'customer'])->name('checkout.customer');
        Route::post('checkout/customer', [CheckoutController::class, 'updateCustomer'])->name('checkout.update_customer');
        Route::get('checkout/shipping', [CheckoutController::class, 'shipping'])->name('checkout.shipping');
        Route::get('checkout/payment', [CheckoutController::class, 'payment'])->name('checkout.payment');
        Route::get('checkout/{order}/pdf', [CheckoutController::class, 'pdf'])->name('checkout.pdf');
        Route::post('check', [CheckoutController::class, 'check'])->name('check');
        Route::post('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
        Route::get('checkout/{id}', [CheckoutController::class, 'checkout_detail'])->name('checkout.detail');


        // REGIONAL
        Route::post('regional/province', [RegionalController::class, 'province'])->name('regional.province');
        Route::post('regional/city', [RegionalController::class, 'city'])->name('regional.city');
        Route::post('regional/subdistrict', [RegionalController::class, 'subdistrict'])->name('regional.subdistrict');


        Route::get('logout', [AuthController::class, 'do_logout'])->name('logout');

        // // PROFILE
        // Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        // Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
        // Route::post('profile/change-password', [ProfileController::class, 'do_change_password'])->name('profile.do_change_password');

    });
});
// });
