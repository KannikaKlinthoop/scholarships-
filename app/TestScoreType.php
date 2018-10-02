<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestScoreType extends Model
{
  public function scholars(){
    return $this->belongsToMany('App\Scholar','scholar_testscoretype');
  }
}
