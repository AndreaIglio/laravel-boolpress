<?php

namespace App;
use App\Articles;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function article(){
        return $this->hasMany('App\Articles');
    }
}
