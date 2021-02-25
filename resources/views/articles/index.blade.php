@extends ('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

@foreach($articles as $article)

@include('articles.partials.card')

@endforeach

@endsection