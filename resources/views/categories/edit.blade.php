@extends('layout.app')

@section('title')

Categories

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection


@section('content')
<form class="card flex column" action="{{route('categories.update', $category->id)}}" method="post">
    @METHOD ('PATCH')
    @csrf
    <label for="name">Category name</label>
    <input id="name" class="" type="text" name="name" value="{{$category->name}}">
    <label for="over18">Over18</label>
    <select id="over18" name="over18" value="">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>
    <div class="crud flex">
        <div class="undo flex">
            <a href="{{route('categories.edit', $category->id)}}"> <i class="fas fa-undo-alt"></i></a>
        </div>
        <button class="btn btn-dark" type="submit">
            Submit
        </button>
    </div>
</form>


@endsection