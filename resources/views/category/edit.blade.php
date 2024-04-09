@extends('layout.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($kategori)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</H5>
                    The data you are looking for was not found.
                </div>
                <a href="{{ url('category') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/category/' . $kategori->kategori_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Category Code</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="kategori_kode" name="kategori_kode"
                                value="{{ old('kategori_kode', $kategori->kategori_kode) }}" required>
                            @error('kategori_kode')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Category Nama</label>
                            <div class="col-11">
                                <input type="text" class="form-control" id="kategori_nama" name="kategori_nama"
                                    value="{{ old('kategori_nama', $kategori->kategori_nama) }}" required>
                                @error('kategori_nama')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('category') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endempty
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
