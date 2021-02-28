@extends ('layout.app')

@section('title')

Articles

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

@include('layout.partials.add_btn', ["element" => "articles"])

@foreach($articles as $article)

@include('articles.partials.card_article')

@endforeach


@endsection