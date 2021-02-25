@extends ('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

<div class="card">

    @foreach($articles as $article)

    <h3>Title: {{$article->title}}</h3>
    <h3>{{$article->content}}</h3>
    <h3>Author: {{$article->author}}</h3>

    <h3>{{$article->category->name}}</h3>

    <a href="{{ route('articles.show', $article->id) }}"><i class="fas fa-eye"></i></a>
    <a href="{{ route('articles.edit', $article->id) }}"><i class="fas fa-edit"></i></a>


    @endforeach

</div>

@endsection