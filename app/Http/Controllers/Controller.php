<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function success($data = 'success'){
        return response()->json(['code'=> 200,'message'=>'success','data' => $data]);
    }

    protected function fail($code, $msg) {
        return response()->json(['code' => $code, 'message' => $msg]);
    }

    protected function failArr(array $arr) {
       return response()->json(['code' => $arr[0],'message' => $arr[1]]);
    }

    protected function anyEmpty(array $arr) {
        foreach ($arr as $val) {
            if (empty($val)) {
                return false;
            }
        }
        return true;
    }
}
