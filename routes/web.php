<?php

use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\ImageSectionController;
use App\Http\Controllers\admin\Interior_SectionController;
use App\Http\Controllers\admin\Main_SectionController;
use App\Http\Controllers\admin\NewUpdateController;
use App\Http\Controllers\admin\OurClientController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SliderController;
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

    Route::resource('slider', SliderController::class);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/', [websiteController::class, 'HomePage']);

    });


// Rout Admin/ Sliders //
// Route::controller(SliderController::class)->group(function (){
//     Route::get('slider', 'index')->name('slider.index');
//     Route::get('sliders/create', 'create');
//     Route::post('sliders/store', 'store')->name('slider.store');
//     Route::get('slider/edit{id}', 'edit');
//     Route::post('sliders/update{id}', 'update')->name('slider.update');
//     Route::get('sliders/delete{id}', 'destroy');
// });

//Main_SectionController
 Route::controller(Main_SectionController::class)->group(function (){
    Route::get('main', 'index')->name('main.index');
    Route::get('main/create', 'create');
    Route::post('main/store', 'store');
    Route::get('main/edit{id}', 'edit');
    Route::post('main/update{id}', 'update');
    Route::get('main/delete{id}', 'destroy');
});

//Interior_SectionController
Route::controller(Interior_SectionController::class)->group(function (){
    Route::get('interior', 'index')->name('interior.index');
    Route::get('interior/create', 'create');
    Route::post('interior/store', 'store');
    Route::get('interior/edit{id}', 'edit');
    Route::post('interior/update{id}', 'update');
    Route::get('interior/delete{id}', 'destroy');
});

//ImageSectionController
Route::controller(ImageSectionController::class)->group(function (){
    Route::get('image', 'index')->name('image.index');
    Route::get('image/create', 'create');
    Route::post('image/store', 'store');
    Route::get('image/edit{id}', 'edit');
    Route::post('image/update{id}', 'update');
    Route::get('image/delete{id}', 'destroy');
});

//ProductController
Route::controller(ProductController::class)->group(function (){
    Route::get('product', 'index')->name('product.index');
    Route::get('product/create', 'create');
    Route::post('product/store', 'store');
    Route::get('product/edit{id}', 'edit');
    Route::post('product/update{id}', 'update');
    Route::get('product/delete{id}', 'destroy');
});


//CustomerController
Route::controller(CustomerController::class)->group(function (){
    Route::get('customer', 'index')->name('customer.index');
    Route::get('customer/create', 'create');
    Route::post('customer/store', 'store');
    Route::get('customer/edit{id}', 'edit');
    Route::post('customer/update{id}', 'update');
    Route::get('customer/delete{id}', 'destroy');
});

//OurClientController
Route::controller(OurClientController::class)->group(function (){
    Route::get('ourClient', 'index')->name('ourClient.index');
    Route::get('ourClient/create', 'create');
    Route::post('ourClient/store', 'store');
    Route::get('ourClient/edit{id}', 'edit');
    Route::post('ourClient/update{id}', 'update');
    Route::get('ourClient/delete{id}', 'destroy');
});

//NewUpdateController
Route::controller(newUpdateController::class)->group(function (){
    Route::get('newUpdate', 'index')->name('newUpdate.index');
    Route::get('newUpdate/create', 'create');
    Route::post('newUpdate/store', 'store');
    Route::get('newUpdate/edit{id}', 'edit');
    Route::post('newUpdate/update{id}', 'update');
    Route::get('newUpdate/delete{id}', 'destroy');
});
