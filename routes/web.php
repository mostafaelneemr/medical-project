<?php

use App\Http\Controllers\admin\about\{AboutImageController, AboutSliderController, CustomerController, HelpController};
use App\Http\Controllers\admin\contact\ContactSliderController;
use App\Http\Controllers\admin\home\{ImageSectionController , SliderController, ProductController};
use App\Http\Controllers\admin\service\{Interior_SectionController, ServiceSliderController};
use App\Http\Controllers\admin\Main_SectionController;
use App\Http\Controllers\admin\OurClientController;
use App\Http\Controllers\admin\settingController;
use App\Http\Controllers\website\websiteController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');

    Route::group(['prefix' => 'home'], function () {
        Route::resource('home-slider', SliderController::class);
        Route::resource('main-section', Main_SectionController::class);
        Route::resource('images', ImageSectionController::class);
        Route::resource('products', ProductController::class);
        Route::resource('clients', OurClientController::class);
    });
 
    Route::group(['prefix' => 'about'], function() {
        Route::resource('about-slider', AboutSliderController::class);
        Route::resource('customers', CustomerController::class);
        Route::resource('help-section', HelpController::class);
        Route::resource('image-section', AboutImageController::class);
    });

    Route::group(['prefix' => 'service'], function () {
        Route::resource('service-slider', ServiceSliderController::class);
        Route::resource('interior_Section', Interior_SectionController::class);
        Route::resource('service', ServiceSliderController::class);
        Route::resource('service-cart', ServiceSliderController::class);
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::resource('contact-slider', ContactSliderController::class);
    });

    Route::get('settings', [settingController::class, 'index'])->name('settings');
    Route::patch('setting/update', [settingController::class, 'update'])->name('settings.update');

    // Route::get('test', function () {
    //     return setting('Instagram');
    // }); 
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/', [websiteController::class, 'home'])->name('home');
        Route::get('/about', [websiteController::class, 'about'])->name('about');
        Route::get('/service', [websiteController::class, 'service'])->name('service');
        Route::get('/contact', [websiteController::class, 'contact'])->name('contact');
    });
