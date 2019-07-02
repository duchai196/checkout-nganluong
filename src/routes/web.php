<?php
/**
 * Created by PhpStorm.
 * User: haind
 * Date: 6/27/2019
 * Time: 2:16 PM
 */
Route::get('checkout-nl/success', 'Checkout\NganLuong\CheckoutController@success')->name('checkoutNl.success');
Route::get('checkout-nl/{data}', 'Checkout\NganLuong\CheckoutController@postCheckout')->name('checkoutNl.ngan-luong');
