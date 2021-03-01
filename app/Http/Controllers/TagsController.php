<?php

namespace App\Http\Controllers;

use App\Tags;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tags $tags)

    
    {
        $tags = Tags::all();
        // dd($tags);
        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
       return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'arguments' => 'required',
            'views' => 'numeric|min:1|max:999999',
            'shares' => 'numeric|min:1|max:999999',

        ])->validate();

        Tags::create($validatedData);
        
        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show(Tags $tag)
    {
       
        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function edit(Tags $tag)
    {

        return view('tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tags $tag)
    {
        $validatedData = $request->validate([
            'arguments' => 'required',
            'shares' => 'nullable',
            'views' => 'nullable',

        ]);

        $tag -> update($validatedData);

        return redirect()->route('tags.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);

        $tag->delete();
        return redirect()->route('tags.index');
    }
}
