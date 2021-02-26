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


        <label for="category_id">Category:</label>
        <select name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}" name="category_id">
                {{$category->id}}
            </option>

            @endforeach
        </select>

        <div class="crud flex">
            <button class="btn btn-dark" type="submit">
                Submit
            </button>
        </div>



    </div>


</form>



@endsection