<?php

/*
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */
Route::match(['get', 'post'], 'front', function () {
    $all = Themosis\Theme\Facades\Post::all();

    $users = DB::table('users')->get();

    return view('hello', ['articles' => $all, 'users' => $users]);
});

Route::match(['get', 'post'], 'page', function () {
    return 'Generic page';
});

Route::get('user/{name}', function($name){
    return 'Hi user '.$name;
});

Route::match(['get', 'post'], 'home', ['uses' => 'Themosis\Theme\Controllers\Example@index']);

Route::get('something', function()
{
    return 'Hello something';
});

Route::any('singular', ['jl_cars', function() {
    return view('cars.single');
}]);

Route::any('404', function () {
    return 'Nothing yet';
});

Route::any('404', function () {
    return 'Nothing yet';
});
