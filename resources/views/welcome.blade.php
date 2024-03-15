@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content-body')
    <p>Welcome to this beautiful admin panel</p>
@stop

{{-- push extra css --}}

@push('css')
    {{-- add here stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- push extra script --}}

@push('js')
    <script>
        console.log('Hi, Im using the laravel-AdminLTE package!');
    </script>
@endpush
