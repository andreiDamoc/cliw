<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PinterestController extends Controller
{
  public function get_photos(){
      $lat = Input::get('lat');
      $lng = Input::get('lsng');

      return response()->json(Input::all());
  }
}
