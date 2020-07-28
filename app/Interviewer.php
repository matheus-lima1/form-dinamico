<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','password'];

    public function questionnaires(){

        return $this->belongsToMany(Questionnaire::class,'projects');

    }
}
