<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // 测试框架接口
    public function hello(){
        return $this->success('hello world');
    }

    public function version(){
        $laravel = app();
        return $this->success($laravel::VERSION);
    }
}
