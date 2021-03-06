<?php

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
    return view('welcome');
});

Route::get('/scraping', 'ScrapingController@example');

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://jsonplaceholder.typicode.com/posts',
   
]);

dd($client);