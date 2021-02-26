<?php

namespace App;
use App\Categories;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = ['title','content','author','category_id'];
    
    public function category(){
        return $this->belongsTo('App\Categories');
    }

    

}
