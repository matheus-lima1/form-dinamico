<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interviewer;

class InterviewerController extends Controller
{

    private $interviewer;

    public function __construct(Interviewer $interviewer){
        $this->interviewer = $interviewer;
    }

    public function index()
    {
        $interviewers = $this->interviewer->paginate(5);

        return view('interviewers.index',compact('interviewers'));
    }

 
    public function create()
    {
        return view('interviewers.create');
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
