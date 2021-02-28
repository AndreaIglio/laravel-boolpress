@extends('layout.app')

@section('title')

Categories

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection


@section('content')


<form class="card flex column" action="{{route('tags.update', $tag->id)}}" method="post">
    @METHOD ('PATCH')
    @csrf
    <label for="name">Tag name</label>
    <input id="arguments" class="" type="text" name="arguments" value="{{$tag->arguments}}">
    <label for="views">Views</label>
    <input id="views" class="" type="text" name="views" value="{{$tag->views}}">
    <label for="shares">Shares</label>
    <input id="shares" class="" type="text" name="shares" value="{{$tag->shares}}">



    <div class="crud flex">
        <div class="undo flex">
            <a href="{{route('tags.edit', $tag->id)}}"> <i class="fas fa-undo-alt"></i></a>
        </div>
        <button class="btn btn-dark" type="submit">
            Submit
        </button>
    </div>
</form>


@endsection