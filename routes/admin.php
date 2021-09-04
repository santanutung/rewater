<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\SiteFontendSettingCommentsController as frontend;
use  App\Http\Controllers\Admin\SitesettingController ;
use  App\Http\Controllers\Admin\RozerpayhistoryController ;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/a', function () {
    return view('welcome');
});



Route::group(
    ['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'AdminMiddleware']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


        Route::get('/footer', [frontend::class, 'footer_show'])->name('footer.footer_show');
        Route::put('/footer', [frontend::class, 'footer_update'])->name('footer.footer_update');
        Route::get('/contactpage', [frontend::class, 'contactpage_show'])->name('contactpage.setting');
        Route::put('/contactpage', [frontend::class, 'contactpage_update'])->name('contactpage.setting');
        Route::get('/sitesetting', [SitesettingController::class, 'sitesetting_show'])->name('sitesetting.setting');
        Route::put('/sitesetting', [SitesettingController::class, 'sitesetting_update'])->name('sitesetting.setting');

        Route::get('/portfolio', [SitesettingController::class, 'portfoliosetting_show'])->name('portfolio_setting.setting');
        Route::put('/portfolio', [SitesettingController::class, 'portfoliosetting_update'])->name('portfolio_setting.setting');
        Route::get('/rozerpay', [SitesettingController::class, 'rozerpay_show'])->name('rozerpay.setting');

        Route::put('/rozerpay', [SitesettingController::class, 'rozerpay_update'])->name('rozerpay.setting');


        Route::resource('categories', CategoryController::class);
        Route::resource('arts', ArtController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('news', NewsController::class);
        Route::resource('comments', CommentController::class);
        Route::resource('orders', CustomerOrderOrdeController::class);
        Route::resource('newcomments', CustomerCommentsController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('users', UserController::class);

        Route::get('/razorpay_history', [RozerpayhistoryController::class, 'index'])->name('razorpay_history');
    }
);


