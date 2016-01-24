<?php

namespace App\Http\Controllers;
require_once 'API.php';

class FlickrController extends Controller
{
    public function get_photos(){


        return 'dddddddd';

        # create a new api object

        $api = new Flickr_API(array(
            'api_key'  => 'e113f3a7317277392933dbb91decaf01',
        ));


        # call a method

        $response = $api->callMethod('flickr.test.echo', array(
            'foo' => 'bar',
        ));


        # check the response

        if ($response){
            alert($response);
            # response is an XML_Tree root object
        }else{
            # fetch the error
            $code = $api->getErrorCode();
            $message = $api->getErrorMessage();
        }
    }
}
