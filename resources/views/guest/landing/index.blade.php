@extends('guest.layout.app')
@section('title', 'Home')
@section('content')
    @include('guest.landing.hero')
    @include('guest.landing.features')
    @include('guest.landing.visual-content')
    @include('guest.landing.cta')
@endsection
