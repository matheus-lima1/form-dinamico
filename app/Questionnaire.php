<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','audio'];

    public function interviewers(){

        return $this->belongsToMany(Interviewer::class,'projects');

    }

    public function questions(){

        return $this->belongsToMany(Question::class,'questionnaires_questions');

    }
}
