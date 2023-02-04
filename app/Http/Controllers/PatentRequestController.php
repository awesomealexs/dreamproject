<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatentRequestController extends Controller
{


    public function index(){

        return view('pages.patent_request');
    }
}
