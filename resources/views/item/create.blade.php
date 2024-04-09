@extends('layout.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('item') }}" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Category</label>
                    <div class="col-11">
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            <option value="">- Pilih Kategori -</option>
                            @foreach ($kategori as $items)
                                <option value="{{ $items->kategori_id }}">{{ $items->kategori_nama }}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Item Code</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="barang_kode" name="barang_kode"
                            value="{{ old('barang_kode') }}" required>
                        @error('barang_kode')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Item Name</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="barang_nama" name="barang_nama"
                                value="{{ old('barang_nama') }}" required>
                            @error('barang_nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Buy Price</label>
                        <div class="col-11">
                            <input type="number" class="form-control" id="harga_beli" name="harga_beli"
                                value="{{ old('harga_beli') }}" required>
                            @error('harga_beli')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Sell Price</label>
                        <div class="col-11">
                            <input type="number" class="form-control" id="harga_jual" name="harga_jual"
                                value="{{ old('harga_jual') }}" required>
                            @error('harga_jual')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label"></label>
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('item') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
