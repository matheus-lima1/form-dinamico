<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    public $timestamps = false;
    protected $fillable = ['alternative','selected'];

    public function question(){

        return $this->belongsTo(Question::class);

    }
}
