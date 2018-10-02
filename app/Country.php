<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function scholars()
    {
        return $this->morphToMany('App\Scholar', 'reference','scholar_link_type');
    }
}
