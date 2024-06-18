@extends('guest.layout.app')

@section('title', 'Documentation')

@section('content')
    <livewire:docu-display :document-id="$id" />
@endsection
