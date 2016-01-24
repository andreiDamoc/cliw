<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Prophecy\Exception\Exception;

class PinterestController extends Controller
{
  public function get_photos(){
      $lat = Input::get('lat');
      $lng = Input::get('lng');

      $client = new Client();

      //try to translate city name
      try {
          $response = $client->get('https://api.instagram.com/v1/locations/search', [
              'query' => [
                  'client_id' => 'd49da08a520f47cbb6e7618f077f33ef',
                  'lat' => $lat,
                  'lng' => $lng,
              ]
          ]);
      } catch (Exception $e) {
          $response = $e->getResponse();
      }
      return response()->json($response->getBody());
  }
}
