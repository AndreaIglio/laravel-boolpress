@extends('layout.app')

@section('title')

Tags

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')



@include('tags.partials.card_tags')

@include('layout.partials.add_btn', ['element' => 'tags' ])



@endsection