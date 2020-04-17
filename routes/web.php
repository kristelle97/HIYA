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

Auth::routes( [ 'verify' => true ] );

Route::get( '/', function () {
    return view( 'welcome' );
} );

/**
 * Blog & Pages
 */
Route::get( '/page/{slug}', 'PageController@show' )->name( 'page.show' );
Route::group([ 'prefix' => 'blog', 'as' => 'blog.' ],function() {
    Route::get( '/', 'BlogController@index' )->name( 'index' );
});

/**
 * Auth Routes
 */
Route::middleware( 'auth' )->group( function () {
    Route::get( '/home', 'HomeController@index' )->name( 'home' );

    Route::group([ 'prefix' => 'profile', 'as' => 'profile.' ],function() {
        Route::get( '/', 'ProfileController@index' )->name( 'index' );
        Route::post( '/', 'ProfileController@update' )->name( 'update' );
    });

    Route::group([ 'prefix' => 'blog', 'as' => 'blog.' ],function() {
        Route::get( '/{slug}', 'BlogController@show' )->name( 'show' );
    });
} );
