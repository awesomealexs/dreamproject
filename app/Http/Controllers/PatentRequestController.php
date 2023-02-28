<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatentRequestForm;
use App\Models\PatentRequest;
use App\Models\Task;
use Illuminate\Http\Request;


class PatentRequestController extends Controller
{


    public function index(){
        $tasks = Task::all();

        return view('pages.patent_request', [
            'tasks' => $tasks
        ]);
    }

    public function save(Request $request, PatentRequestForm $form){
        $patentRequestCreation = PatentRequest::create($form->validated());

        $patentRequest = PatentRequest::find($patentRequestCreation->id);

        $choosenTasks = array_keys($request->input('task'));

        $patentRequest->tasks()->attach($choosenTasks);

        return redirect('patent_request');
    }
}
