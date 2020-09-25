<?php


Route::get('/', 'MenuMakananController@index')->name('home-dashboard');
Route::get('/create-menu', 'MenuMakananController@create')->name('create-menu-create');
Route::post('/create-menu/store', 'MenuMakananController@store')->name('create-menu-store');
Route::get('/checkout/bayar/selesai/upload', 'bukti@create')->name('create-bukti');
Route::post('/checkout/bayar/selesai/upload/store', 'bukti@store')->name('create-bukti-store');
// Route::get('/login', 'LoginController@login')->name('login');
// Route::post('/login-store', 'LoginController@loginPost')->name('login-post');
// Route::get('/register', 'LoginController@register')->name('register');
// Route::post('/register-store', 'LoginController@registerPost')->name('register-store');
// Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/order/deskripsi/{menuMakanan}', 'OrderController@index')->name('deskripsi');
Route::get('/order/{menuMakanan}', 'OrderController@order')->name('order');
Route::post('/order/{menuMakanan}/store','OrderController@store')->name('order-store');
Route::get('/checkout', 'PembayaranController@index')->name('pembayaran');
Route::get('/checkout/bayar/', 'PembayaranController@metode_pembayaran')->name('metode');
Route::delete('/checkout/bayar/selesai/', 'OrderController@destroy')->name('metode-selesai');
Route::get('/aboutus','aboutus@index')->name('aboutus');
Route::get('/checkout/bayar/selesai/kirim', 'OrderController@bayar_selesai')->name('selesai');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
