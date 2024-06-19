@extends('guest.layout.app')
@section('title', 'Add New')
@section('content')

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <livewire:new-documentation />
@endsection
@livewireScripts
