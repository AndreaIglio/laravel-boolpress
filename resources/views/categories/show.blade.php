@extends ('layout.app')


@section('navbar')

@include('layout.partials.navbar')


@endsection

@section('content')

@include('categories.partials.card_categories')

@endsection