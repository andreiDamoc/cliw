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
//astea le-am pus sa vezi cum le iei din ajax
     //input alll returneaza tot inapoi
      return response()->json([$lat]);
  }
}
