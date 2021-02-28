@extends('layout.app')

@section('title')

Categories

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')
<form class="card flex column" action="{{route('categories.store')}}" method="post">
    @csrf
    <label for="name">Category name</label>
    <input id="name" class="" type="text" name="name" value="">
    <label for="over18">Over18</label>
    <select id="over18" name="over18" value="">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <div class="crud flex">
        <div class="undo flex">
            <a href="{{route('categories.create')}}"> <i class="fas fa-undo-alt"></i></a>
        </div>
        <button class="btn btn-dark" type="submit">
            Submit
        </button>
    </div>
</form>


@endsection