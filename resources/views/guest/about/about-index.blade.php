@extends('guest.layout.app')
@section('title', 'About')
@section('content')
    @include('guest.about.hero')
    @include('guest.about.history')
    @include('guest.about.message')
@endsection
