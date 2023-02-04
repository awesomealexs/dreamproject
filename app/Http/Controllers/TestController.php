<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){



        $items = [
            [
                'name' => [
                    'name2' =>123,
                ]
            ],[
                'name' => 1123
            ],[
                'name' => 1123
            ],[
                'name' => 1123
            ]
        ];

        return view('test.index', ['items' => $items]);
    }

    private function ab(){

        return '<li>123</li>
                <li>1232</li>
                <li>1231</li>
                <li>12323</li>';
    }
}
