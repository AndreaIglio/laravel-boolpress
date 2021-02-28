<?php

namespace App;
use App\Articles;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $fillable = ['name', 'over18'];


    public function article(){
        return $this->hasMany('App\Articles');
    }
}
