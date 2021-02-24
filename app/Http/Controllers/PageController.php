<?php


namespace App\Http\Controllers;

use App\Articles;

use Illuminate\Http\Request;



class PageController extends Controller

{
   public function articles_api(){
    

        return view('spa.articlesApi');
    
    }
    public function categories_api()
    {

        return view('spa.categoriesApi');
    }
    public function tags_api(
    ){
        return view('spa.tagsApi');

    }
   
}
