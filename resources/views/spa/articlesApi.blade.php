@extends('layout.app')

@section('navbar')

    @include('layout.partials.navbar')

@endsection

@section('content')


    <api-component api="articles"></api-component>


@endsection