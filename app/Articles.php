<?php

namespace App;
use App\Categories;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    
    public function category(){
        return $this->belongsTo('App\Categories');
    }

    

}
