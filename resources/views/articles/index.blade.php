@extends ('layout.app')

@section('title')

Articles

@endsection

@section('navbar')

@include('layout.partials.navbar')

@endsection

@section('content')

@include('layout.partials.add_btn')

@foreach($articles as $article)

@include('articles.partials.card_article, ['element' => 'articles' ] ')

@endforeach


@endsection