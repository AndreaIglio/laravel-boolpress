@extends ('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

<form action="{{route('articles.update', $article->id)}}" method="post">
    @METHOD ('PATCH')
    @csrf
    <div class="card flex column">

        <label for="title">Title</label>
        <input type="text" name="title" value="{{$article->title}}">

        <label for="content">Content</label>
        <input type="text" name="content" value="{{$article->content}}">

        <label for="author">Author</label>
        <input type="text" name="author" value="{{$article->author}}">


        <h4 class="category">Category: {{$article->category->name}}</h4>

        <div class="crud flex">
            <div class="undo flex">
                <a href="{{route('articles.edit', $article->id)}}"> <i class="fas fa-undo-alt"></i></a>
            </div>
            <button class="btn btn-dark" type="submit">
                Submit
            </button>
        </div>



    </div>


</form>



@endsection