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
Route::group([ 'prefix' => 'jobs', 'as' => 'jobs.' ],function() {
    Route::get( '/', 'JobController@index' )->name( 'index' );
});
Route::group([ 'prefix' => 'interviews', 'as' => 'interview.' ],function() {
    Route::get( '/', 'InterviewController@index' )->name( 'index' );
    Route::get( '/{slug}', 'InterviewController@show' )->name( 'show' );
});

Route::group([ 'prefix' => 'recommendations', 'as' => 'recommendation.' ],function() {
    Route::get( '/', 'RecommendationController@index' )->name( 'index' );
    Route::get( '/{slug}', 'RecommendationController@show' )->name( 'show' );
});

/**
 * Auth Routes
 */
Route::middleware( 'auth' )->group( function () {
    Route::redirect('/home', '/members')->name( 'home' );

    // Profile
    Route::group([ 'prefix' => 'profile', 'as' => 'profile.' ],function() {
        Route::get( '/', 'ProfileController@index' )->name( 'index' );
        Route::post( '/', 'ProfileController@update' )->name( 'update' );
    });

    // Members
    Route::group([ 'prefix' => 'members', 'as' => 'members.' ],function() {
        Route::get( '/', 'MemberController@index' )->name( 'index' );
        Route::get( '/{slug}', 'MemberController@show' )->name( 'show' );
        Route::post( '/{slug}/clap/', 'MemberController@clap' )->name( 'clap' );
    });

    // Contact
    Route::group([ 'prefix' => 'contact', 'as' => 'contact.' ],function() {
        Route::post( '/', 'ContactController@store' )->name( 'store' );
    });

    // Posts
    Route::post( 'post/{id}/like', 'BlogController@like' )->name( 'post.like' );
    Route::post( 'post/{id}/comment', 'BlogController@comment' )->name( 'post.comment' );
    Route::post( 'post/comment/{id}/like', 'BlogController@likeComment' )->name( 'post.comment.like' );
    Route::delete( 'post/comment/{id}', 'BlogController@delete' )->name( 'post.comment.delete' );
    Route::group([ 'prefix' => 'blog', 'as' => 'blog.' ],function() {
        Route::get( '/{slug}', 'BlogController@show' )->name( 'show' );
    });
    Route::group([ 'prefix' => 'jobs', 'as' => 'jobs.' ],function() {
        Route::get( '/{slug}', 'JobController@show' )->name( 'show' );
    });
} );
