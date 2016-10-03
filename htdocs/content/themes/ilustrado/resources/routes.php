<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('template', ['about', function()
{
	       Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('about');
}]);


Route::get('template', ['menu', function()
{
	        Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('menu');
}]);

Route::get('template', ['services', function()
{
	        Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('services');
}]);

Route::get('template', ['contact', function()
{
	        Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('contact');
}]);

Route::get('template', ['home', function()
{
            Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('home');
}]);



Route::get('postTypeArchive', ['tribe_events', function()
{
		Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('events');
}]);

Route::get('singular', ['tribe_events', function()
{
		Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('events');
}]);

Route::any('news', function()
{
		Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('news');
});

Route::get('singular', array('post', function()
{
		Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return 'singular';
}));

Route::get('home', function()
{
        Asset::add('styles', 'css/all.css', false, '1.0', 'all');
        Asset::add('jquery', 'js/jquery.min.js', false, '1.0', 'all');
        Asset::add('swiperjs', 'js/swiper.min.js', false, '1.0', 'all');
        Asset::add('selectjs', 'js/select2.min.js', false, '1.0', 'all');
        Asset::add('script', 'js/scripts.js', false, '1.0', 'all');
    return View::make('home');
});
