@extends('layout.app')

@section('title')

Categories

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection


@section('content')


@foreach($categories as $category)

@include('categories.partials.card_categories')

@endforeach

@include('layout.partials.add_btn', ['element' => 'categories' ])

@endsection