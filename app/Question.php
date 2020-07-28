<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    protected $fillable = ['type_buttom'];

    public function open_responses(){

        return $this->hasMany(OpenResponse::class);

    }

    public function questionnaires(){

        return $this->belongsToMany(Questionnaire::class,'questionnaires_questions');

    }
}
