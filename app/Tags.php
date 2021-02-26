<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    
    public function articles(){


        return $this->belongsToMany('App\Articles','articles_tags','tag_id','article_id');
        // return $this->belongsToMany(Articles::class);



    }


}
