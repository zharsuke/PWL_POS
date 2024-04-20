@extends('layout.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($sales)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    The data you are looking for was not found.
                </div>
            @else
            <h3>Sales</h3>
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $sales->penjualan_id }}</td>
                    </tr>
                    <tr>
                        <th>Cashier</th>
                        <td>{{ $sales->user->username }}</td>
                    </tr>
                    <tr>
                        <th>Customer</th>
                        <td>{{ $sales->pembeli }}</td>
                    </tr>
                    <tr>
                        <th>Sales Code</th>
                        <td>{{ $sales->penjualan_kode }}</td>
                    </tr>
                    <tr>
                        <th>Sales Date</th>
                        <td>{{ $sales->penjualan_tanggal }}</td>
                    </tr>
                </table>
                <br>

                <h3>Detail Sales</h3>
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Detail Id</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($salesDetail as $item)
                            <tr>
                                <td>{{ $item->detail_id }}</td>
                                <td>{{ $item->barang->barang_nama }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->jumlah }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
            @endempty
            <a href="{{ url('sales') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
