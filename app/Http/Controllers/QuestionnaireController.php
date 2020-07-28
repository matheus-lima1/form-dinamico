<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionnaireController extends Controller
{

    private $questionnaire;

    public function __construct(Questionnaire $questionnaire){
        $this->questionnaire = $questionnaire;
    }
    
    public function index()
    {
        $questionnaires = $this->questionnaire->paginate(5);

        return view('questionnaires.index',compact('questionnaires'));
    }

    
    public function create()
    {
        $questions = \App\Question::paginate(5);
        
        return view('questionnaires.create',compact('questions'));
    }

    
    public function store(Request $request)
    {
        $data = $request->all();
        $questions = $request->get('questions',null);

        $questionnaire = $this->questionnaire->create($data);
        $questionnaire->questions()->sync($questions);

        return redirect()->route('questionnaires.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $questionnaire = $this->questionnaire->findOrFail($id);
        $questionnaire->delete();

        return redirect()->route('questionnaires.index');
    }
}
