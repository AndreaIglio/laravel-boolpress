@extends('layout.app')

@section('title')

Categories

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection


@section('content')


<form class="card flex column" action="{{route('tags.store')}}" method="post">
    @csrf
    <label for="name">Tag name</label>
    <input id="arguments" class="" type="text" name="arguments" value="">
    <label for="views">Views</label>
    <input id="views" class="" type="text" name="views" value="">
    <label for="shares">Shares</label>
    <input id="shares" class="" type="text" name="shares" value="">



    <div class="crud flex">
        <div class="undo flex">
            <a href="{{route('tags.create')}}"> <i class="fas fa-undo-alt"></i></a>
        </div>
        <button class="btn btn-dark" type="submit">
            Submit
        </button>
    </div>
</form>


@endsection