<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/admin',  [
    'as' => 'admin',
    'uses' => 'AdminController@loginAdmin',
]);
Route::post('/post-admin',[
        'as' => 'post-admin',
        'uses' => 'AdminController@postLoginAdmin',

    ]);

Route::get('admin-logout', [
    'as' => 'admin-logout',
    'uses' => 'AdminController@getLogoutAdmin'
]);

Route::get('home', [
    'as' => 'home',
    'uses' => 'AdminController@homeIndex',
    'middleware'=> 'can:change-content'
]);

Route::get('trang-chu', [
    'as' => 'trang-chu',
    'uses' => 'UserController@getIndex'
]);
Route::get('product-detail/{id}', [
    'as' => 'product-detail',
    'uses' => 'UserController@getDetail'
]);

Route::get('cart', [
    'as' => 'cart',
    'uses' => 'CartController@getCart'
]);
Route::get('updatecart', [
    'as' => 'updatecart',
    'uses' => 'CartController@updateCart'
]);
Route::get('addtocart/{id}', [
    'as' => 'addtocart',
    'uses' => 'CartController@addToCart'
]);
Route::get('deletecart/{id}', [
    'as' => 'deletecart',
    'uses' => 'CartController@deleteCart'
]);
Route::get('checkout', [
    'as' => 'checkout',
    'uses' => 'CheckoutController@getCheckout'
]);
Route::post('postcheckout', [
    'as' => 'postcheckout',
    'uses' => 'CheckoutController@postCheckout'
]);
Route::post('payment', [
    'as' => 'payment',
    'uses' => 'CheckoutController@payment'
]);
Route::get('payment/return',[
    'as'=>'payment.return',
    'uses'=>'CheckoutController@return_vnpay'
]);
Route::get('category/{id}', [
    'as' => 'category',
    'uses' => 'UserController@getCategory'
]);
Route::get('shop', [
    'as' => 'shop',
    'uses' => 'UserController@getShop'
]);
Route::get('brand/{id}', [
    'as' => 'brand',
    'uses' => 'UserController@getBrand'
]);

Route::get('register', [
    'as' => 'register',
    'uses' => 'RegisterController@getRegister'
]);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('post-register', [
    'as' => 'post-register',
    'uses' => 'RegisterController@postRegister'
]);
Route::get('contact', [
    'as' => 'contact',
    'uses' => 'ContactController@getContact'
]);
Route::post('contact', [
    'as' => 'contact',
    'uses' => 'ContactController@postContact'
]);
Route::get('search', [
    'as' => 'search',
    'uses' => 'SearchController@getSearch'
]);
Route::get('search-price', [
    'as' => 'search-price',
    'uses' => 'SearchController@getSearchPrice'
]);


//Đăng nhập

Route::get('login', [
    'as' => 'login',
    'uses' => 'LoginController@getLogin'
]);
Route::post('check-login', [
    'as' => 'check-login',
    'uses' => 'LoginController@postLogin'
]);
Route::get('/google',[
     'as' => 'google',
     'uses' =>'LoginController@google']);
Route::get('/google/callback',[
    'as' => 'google-callback',
    'uses' =>'LoginController@callback_google']);

//Đăng xuất
Route::get('logout', [
    'as' => 'logout',
    'uses' => 'LoginController@getLogout'
]);

//ADMIN
Route::prefix('admin')->group(function () {
    Route::prefix('statistical')->group(function () {
        Route::get('/', [
            'as' => 'statistical.index',
            'uses' => 'AdminStatisticalController@index',
            'middleware'=> 'can:change-content'
        ]);
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'AdminCategoryController@index',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/search', [
            'as' => 'categories.search',
            'uses' => 'AdminCategoryController@search',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'AdminCategoryController@create',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'AdminCategoryController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'AdminCategoryController@edit',
            'middleware'=> 'can:change-content'
        ]);

        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'AdminCategoryController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'AdminCategoryController@delete',
            'middleware'=> 'can:change-content'
        ]);
    });
    Route::prefix('brands')->group(function () {
        Route::get('/', [
            'as' => 'brands.index',
            'uses' => 'AdminBrandController@index',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/search', [
            'as' => 'brands.search',
            'uses' => 'AdminBrandController@search',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/create', [
            'as' => 'brands.create',
            'uses' => 'AdminBrandController@create',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/store', [
            'as' => 'brands.store',
            'uses' => 'AdminBrandController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'brands.edit',
            'uses' => 'AdminBrandController@edit',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/update/{id}', [
            'as' => 'brands.update',
            'uses' => 'AdminBrandController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'brands.delete',
            'uses' => 'AdminBrandController@delete',
            'middleware'=> 'can:change-content'
        ]);
    });
    Route::prefix('products')->group(function () {
        Route::get('/', [
            'as' => 'products.index',
            'uses' => 'AdminProductController@index',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/search', [
            'as' => 'products.search',
            'uses' => 'AdminProductController@search',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/create', [
            'as' => 'products.create',
            'uses' => 'AdminProductController@create',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/store', [
            'as' => 'products.store',
            'uses' => 'AdminProductController@store'

        ]);
        Route::get('/edit/{id}', [
            'as' => 'products.edit',
            'uses' => 'AdminProductController@edit',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/update/{id}', [
            'as' => 'products.update',
            'uses' => 'AdminProductController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'products.delete',
            'uses' => 'AdminProductController@delete',
            'middleware'=> 'can:change-content'
        ]);
    });
    Route::prefix('slider')->group(function () {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'AdminSliderController@index',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'AdminSliderController@create',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'AdminSliderController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'slider.edit',
            'uses' => 'AdminSliderController@edit',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/update/{id}', [
            'as' => 'slider.update',
            'uses' => 'AdminSliderController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'slider.delete',
            'uses' => 'AdminSliderController@delete',
            'middleware'=> 'can:change-content'
        ]);
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'AdminUserController@index',
            'middleware'=> 'can:change-user'
        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'AdminUserController@create',
            'middleware'=> 'can:change-user'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'AdminUserController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'AdminUserController@edit',
            'middleware'=> 'can:change-user'
        ]);
        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'AdminUserController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'AdminUserController@delete',
            'middleware'=> 'can:change-user'
        ]);
    });
    Route::prefix('orders')->group(function () {
        Route::get('/', [
            'as' => 'orders.index',
            'uses' => 'AdminOrderController@index',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/detail/{id}', [
            'as' => 'orders.detail',
            'uses' => 'AdminOrderController@detail',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/update/{id}', [
            'as' => 'orders.update',
            'uses' => 'AdminOrderController@update',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'orders.delete',
            'uses' => 'AdminOrderController@deleteOrder',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/print/{id}', [
            'as' => 'orders.print',
            'uses' => 'AdminOrderController@print',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/print/pdf', [
            'as' => 'orders.pdf',
            'uses' => 'AdminOrderController@pdf',
            'middleware'=> 'can:change-content'
        ]);
    });
    Route::prefix('customers')->group(function () {
        Route::get('/', [
            'as' => 'customers.index',
            'uses' => 'AdminCustomerController@index',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/search', [
            'as' => 'customers.search',
            'uses' => 'AdminCustomerController@search',
            'middleware'=> 'can:change-content'
        ]);
        Route::get('/create', [
            'as' => 'customers.create',
            'uses' => 'AdminCustomerController@create',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/store', [
            'as' => 'customers.store',
            'uses' => 'AdminCustomerController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'customers.edit',
            'uses' => 'AdminCustomerController@edit',
            'middleware'=> 'can:change-content'
        ]);
        Route::post('/update/{id}', [
            'as' => 'customers.update',
            'uses' => 'AdminCustomerController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'customers.delete',
            'uses' => 'AdminCustomerController@delete',
            'middleware'=> 'can:change-content'
        ]);
    });
    Route::prefix('contacts')->group(function () {
        Route::get('/', [
            'as' => 'contacts.index',
            'uses' => 'AdminContactController@index',
            'middleware'=> 'can:change-content'
        ]);
    });

});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
