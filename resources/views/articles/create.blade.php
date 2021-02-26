@extends ('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

<form action="{{route('articles.store')}}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" value="{{old('title')}}">

    <label for="content">Content</label>
    <textarea type="text" name="content" cols="30" rows="10">
    {{old('content')}}</textarea>

    <label for="author">Author</label>
    <input type="text" name="author" value="{{old('author')}}">

    <label for="category_id">Category</label>

    <select name="category_id" id="">
        @foreach($categories as $category)

        <option value="{{$category->id}}" name="category_id">
            {{$category->name}}
        </option>
        @endforeach

    </select>

    <label for="tag_id"> Tags </label>
    <select name="tag_id[]" id="tag_id" multiple>
        @foreach($tags as $tag)

        <option value="{{$tag->id}}" name="tag_id">
            {{$tag->arguments}}
        </option>
        @endforeach

    </select>


    <button class="btn btn-dark" type="submit">
        Create
    </button>
</form>



@endsection