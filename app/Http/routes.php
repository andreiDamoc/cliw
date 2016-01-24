<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use GuzzleHttp\Client;

Route::get('/', function () {
    return view('app');
});
Route::post('get_from_pinterest','PinterestController@get_photos');
Route::get('test',function(){
    $client = new Client();

    //try to translate city name

        $response = $client->get('https://api.instagram.com/v1/locations/search', [
            'query' => [
                'lat' => '48.856614',
                'lng' => '2.3522219',
                'client_id' => 'd49da08a520f47cbb6e7618f077f33ef',

            ]
        ]);

    dd($response);
});