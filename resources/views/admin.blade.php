@extends('layout.app')

{{-- customize layout section --}}

@section('subtitle', 'Admin')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Tampilan <?php echo (Auth::user()->level_id == 1)?'Admin':'Manager'; ?>
        <div class="card-body">
            <h1>Login Sebagai:
                <?php echo (Auth::user()->level_id == 1)?'Admin':'Manager'; ?></h1>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush