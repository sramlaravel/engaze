<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('front.home');
});
Route::group(['namespace' => 'Site'   ], function () {
    //guest  user
    route::get('/', 'HomeController@home')->name('home');

//
//

//    route::get('project/', 'ProjectController@project')->name('project');
//
    route::get('services/', 'reservationController@reservation')->name('services');
    route::get('about/', 'aboutController@about')->name('about');
    route::get('blog/', 'blogController@about')->name('blog');
    Route::get('detail/{id}','blogController@detail')->name('detail');
    Route::get('projectdetails/{id}','ProjectController@projectdetails')->name('projectdetails');

    route::get('contact/', 'ContactController@contact')->name('contact');
    Route::post('contact/', 'ContactController@store')->name('contact.create');

    Route::get('jobs','JobeController@index')->name('jobs');
    Route::get('careers/apply/{id}','ApplyController@index');

    Route::post('careers/apply/{id} ', 'ApplyController@fileUpload')->name('fileUpload');
    /**
     *  Cart routes
//     */
//
//    Route::group(['prefix' => 'cart'], function () {
//        Route::get('/', 'CartController@getIndex')->name('site.cart.index');
//        Route::post('/cart/add/{slug?}', 'CartController@postAdd')->name('site.cart.add');
//        Route::post('/update/{slug}', 'CartController@postUpdate')->name('site.cart.update');
//        Route::post('/update-all', 'CartController@postUpdateAll')->name('site.cart.update-all');
//    });
});

