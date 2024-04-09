@extends('layout.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($item)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</H5>
                    The data you are looking for was not found.
                </div>
                <a href="{{ url('item') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/item/' . $item->barang_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Level</label>
                        <div class="col-11">
                            <select class="form-control" id="kategori_id" name="kategori_id" required>
                                <option value="">- Pilih Kategori -</option>
                                @foreach ($kategori as $items)
                                    <option value="{{ $items->kategori_id }}" @if ($items->kategori_id == $items->kategori_id) selected @endif>
                                        {{ $items->kategori_nama }}</option>
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
                                value="{{ old('barang_kode', $item->barang_kode) }}" required>
                            @error('barang_kode')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Item Name</label>
                            <div class="col-11">
                                <input type="text" class="form-control" id="barang_nama" name="barang_nama"
                                    value="{{ old('barang_nama', $item->barang_nama) }}" required>
                                @error('barang_nama')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Buy Price</label>
                            <div class="col-11">
                                <input type="number" class="form-control" id="harga_beli" name="harga_beli"
                                    value="{{ old('harga_beli', $item->harga_beli) }}" required>
                                @error('harga_beli')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Sell Price</label>
                            <div class="col-11">
                                <input type="number" class="form-control" id="harga_jual" name="harga_jual"
                                    value="{{ old('harga_jual', $item->harga_jual) }}" required>
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
            @endempty
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
