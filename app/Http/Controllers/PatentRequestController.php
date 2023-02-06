<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatentRequestForm;
use Illuminate\Http\Request;

class PatentRequestController extends Controller
{


    public function index(){

        return view('pages.patent_request');
    }

    public function save(Request $request, PatentRequestForm $form){
        dd($request);
    }
}
