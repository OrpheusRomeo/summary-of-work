<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Onestep\CurlHandler;

class TestCurlController extends Controller
{
    //
    public function testcurl(Request $request)
    {
        $url = $request->url;
        $curl = new CurlHandler();
        $getResult = $curl->CurlGet($url);

        $data = array('data' => $getResult);
        return $this->success($data);
    
    }
}
