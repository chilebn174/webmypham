<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', 'AdminController@loginAdmin');
Route::post('/admin', 'AdminController@postLoginAdmin');
Route::get('/home', function () {
        return view('home');
    });
    Route::get('/trang-chu',[
    'as'=> 'trang-chu',
    'uses'=>'UserController@getCate',
]);
    Route::get('product-details/{id}',[
    'as'=> 'product-details',
    'uses'=>'UserController@getDetail'
]);
    Route::get('cart',[
    'as'=> 'cart',
    'uses'=>'UserController@getCart'
]);
    Route::get('checkout',[
    'as'=> 'checkout',
    'uses'=>'UserController@getCheckout'
]);
    Route::get('product',[
    'as'=> 'product',
    'uses'=>'UserController@getShop'
]);
    Route::get('login',[
    'as'=> 'login',
    'uses'=>'UserController@getLogin'
]);Route::get('contact',[
    'as'=> 'contact',
    'uses'=>'UserController@getContact'
]);

Route::prefix('admin')->group(function () {

    Route::prefix('categories')->group(function () {
        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'AdminCategoryController@index'
        ]);
        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'AdminCategoryController@create'
        ]);
        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'AdminCategoryController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'AdminCategoryController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'AdminCategoryController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'AdminCategoryController@delete'
        ]);
    });
    Route::prefix('menus')->group(function () {
        Route::get('/', [
            'as' => 'menus.index',
            'uses' => 'AdminMenuController@index'
        ]);
        Route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'AdminMenuController@create'
        ]);
        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'AdminMenuController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'AdminMenuController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'menus.update',
            'uses' => 'AdminMenuController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'AdminMenuController@delete'
        ]);
    });
    Route::prefix('brands')->group(function () {
        Route::get('/', [
            'as' => 'brands.index',
            'uses' => 'AdminBrandController@index'
        ]);
        Route::get('/create', [
            'as' => 'brands.create',
            'uses' => 'AdminBrandController@create'
        ]);
        Route::post('/store', [
            'as' => 'brands.store',
            'uses' => 'AdminBrandController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'brands.edit',
            'uses' => 'AdminBrandController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'brands.update',
            'uses' => 'AdminBrandController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'brands.delete',
            'uses' => 'AdminBrandController@delete'
        ]);

    });
    Route::prefix('products')->group(function () {
        Route::get('/', [
            'as' => 'products.index',
            'uses' => 'AdminProductController@index'
        ]);
        Route::get('/create', [
            'as' => 'products.create',
            'uses' => 'AdminProductController@create'
        ]);
        Route::post('/store', [
            'as' => 'products.store',
            'uses' => 'AdminProductController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'products.edit',
            'uses' => 'AdminProductController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'products.update',
            'uses' => 'AdminProductController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'products.delete',
            'uses' => 'AdminProductController@delete'
        ]);


    });
    Route::prefix('slider')->group(function () {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'AdminSliderController@index'
        ]);
        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'AdminSliderController@create'
        ]);
        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'AdminSliderController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'slider.edit',
            'uses' => 'AdminSliderController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'slider.update',
            'uses' => 'AdminSliderController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'slider.delete',
            'uses' => 'AdminSliderController@delete'
        ]);
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'AdminUserController@index'
        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'AdminUserController@create'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'AdminUserController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'AdminUserController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'AdminUserController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'AdminUserController@delete'
        ]);
    });
    Route::prefix('orders')->group(function () {
        Route::get('/', [
            'as' => 'orders.index',
            'uses' => 'AdminOrderController@index'
        ]);
        Route::get('/detail/{id}', [
            'as' => 'orders.detail',
            'uses' => 'AdminOrderController@detail'
        ]);
        Route::post('/update/{id}', [
            'as' => 'orders.update',
            'uses' => 'AdminOrderController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'orders.delete',
            'uses' => 'AdminOrderController@deleteOrder'
        ]);
        Route::get('/print/{id}', [
            'as' => 'orders.print',
            'uses' => 'AdminOrderController@print'
        ]);
        Route::get('/print/pdf', [
            'as' => 'orders.pdf',
            'uses' => 'AdminOrderController@pdf'
        ]);
    });
    Route::prefix('customers')->group(function () {
        Route::get('/', [
            'as' => 'customers.index',
            'uses' => 'AdminCustomerController@index'
        ]);
        Route::get('/create', [
            'as' => 'customers.create',
            'uses' => 'AdminCustomerController@create'
        ]);
        Route::post('/store', [
            'as' => 'customers.store',
            'uses' => 'AdminCustomerController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'customers.edit',
            'uses' => 'AdminCustomerController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'customers.update',
            'uses' => 'AdminCustomerController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'customers.delete',
            'uses' => 'AdminCustomerController@delete'
        ]);


    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

