@extends('layout.app')

{{-- customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Update')
{{-- content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Kategori</h3>
            </div>

            <form action="{{ route('kategori.update_save', $kategori->kategori_id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="form-group" hidden>
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id"
                            value="{{ $kategori->kategori_id }}">
                    </div>
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori"
                            value="{{ $kategori->kategori_kode }}">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori"
                            value="{{ $kategori->kategori_nama }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </div>
    </div>
@endsection
