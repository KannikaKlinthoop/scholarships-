<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    protected $fillable = [
      'name_scholar',
      'name_university',
      'level_id',
      'program_id',
      // 'test_score_types_id',
      'name_country',
      'inclusion',
      'description'
    ];
    public function level(){
      return $this->belongsTo('App\Level', 'level_id', 'id');
    }
    public function countries(){
      return $this->morphedByMany('App\Country', 'reference','scholar_link_type');
    }
    public function programs(){
      return $this->belongsTo('App\Program','program_id','id');
    }
    public function testscorefunc(){
      return $this->belongsToMany('App\TestScoreType','scholar_testscoretype','scholar_id','test_score_types_id');
    }
    public function universities(){
      return $this->morphedByMany('App\University', 'reference','scholar_link_type');      
    }
}
