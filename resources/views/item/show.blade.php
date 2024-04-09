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
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    The data you are looking for was not found.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $item->barang_id }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $item->kategori->kategori_nama }}</td>
                    </tr>
                    <tr>
                        <th>Item Code</th>
                        <td>{{ $item->barang_kode }}</td>
                    </tr>
                    <tr>
                        <th>Item Name</th>
                        <td>{{ $item->barang_nama }}</td>
                    </tr>
                    <tr>
                        <th>Buy Price</th>
                        <td>{{ $item->harga_beli }}</td>
                    </tr>
                    <tr>
                        <th>Sell Price</th>
                        <td>{{ $item->harga_jual }}</td>
                    </tr>
                </table>
            @endempty
            <a href="{{ url('item') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
