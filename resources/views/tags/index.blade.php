@extends('layout.app')

@section('title')

Tags

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

@foreach($tags as $tag)

@include('tags.partials.card_tags')


@endforeach



@endsection