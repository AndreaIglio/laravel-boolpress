<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Categories;
use App\Tags;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Articles $article)
    {
        $articles = Articles::latest()->get();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Articles $article, Categories $categories, Tags $tags)
    {
        $categories = Categories::all();
        $tags = Tags::all();
        return view('articles.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     
        $validatedData = Validator::make($request->all(), [

            'title'=> 'required|max:80',
            'content'=> 'required',
            'author'=> 'required',
            'category_id' => 'required',
            'tag_id' => 'nullable',


        ])->validate();
        
        // dd($validatedData);
        Articles::create($validatedData);
        

        $article = Articles::orderBy('id', 'desc')->first();
        $article->tags()->attach($request->tag_id);

        // dd($article);

        return redirect()->route('articles.index');

        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $article, Categories $categories, Tags $tags)
    {
        $tags = Tags::all();
        $categories = Categories::all();
        return view('articles.edit', compact('article','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $article)
    {
        // dd($article);
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'category_id'=> 'required',
            'tag_id' => 'nullable',
        ]);
        // dd($validatedData);
        $article->update($validatedData);
        $article->tags()->attach($request->tag_id);
        return redirect()->route('articles.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $article)
    {
        
        $article->tags()->detach();
        $article->delete();

        return redirect()->route('articles.index');
    }
}
