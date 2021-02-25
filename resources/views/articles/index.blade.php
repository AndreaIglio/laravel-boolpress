@extends ('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

@foreach($article as $item)

<div class="card flex column">


    <h3>Title: {{$item->title}}</h3>
    <p>{{$item->content}}</p>
    <h4>Author: {{$item->author}}</h4>

    <h4 class="category">Category: {{$item->category->name}}</h4>

    <div class="crud flex">
        <button class="btn btn-dark"><a href="{{ route('articles.show', $item->id) }}"><i class="fas fa-eye"></i></a></button>
        <button class="btn btn-warning" href=""><a href="{{ route('articles.edit', $item->id) }}"><i class="fas fa-edit"></i></a></button>

    </div>



</div>

@endforeach

@endsection