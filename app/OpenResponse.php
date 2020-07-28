<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenResponse extends Model
{
    public $timestamps = false;
    protected $fillable = ['response'];

    public function question(){

        return $this->belongsTo(Question::class);

    }
}
