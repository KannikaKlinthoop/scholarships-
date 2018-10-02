<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $guarded = ['id'];
    public function scholar(){
      return $this->hasMany('App\Scholar');
  }
}
