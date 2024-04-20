@extends('layout.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('sales') }}" class="form-horizontal">
                @csrf

                <div class="row justify-content-between">
                    <div class="col-md-7">
                        <div class="form-group row">
                            <label class="control-label col-form-label">Cashier</label>
                            <select class="form-control" id="user_id" name="user_id" required>
                                <option value="">- Choose Cashier -</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->user_id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-form-label">Customer</label>
                            <input type="text" class="form-control" id="pembeli" name="pembeli"
                                value="{{ old('pembeli') }}" required>
                            @error('pembeli')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-form-label">Sales Code</label>
                            <input type="text" class="form-control" id="penjualan_kode" name="penjualan_kode"
                                value="{{ $salesCode }}" required readonly>
                            @error('penjualan_kode')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-form-label">Sales Date</label>
                            <input type="date" class="form-control" id="penjualan_tanggal" name="penjualan_tanggal"
                                value="{{ $salesDate }}" required readonly>
                            @error('penjualan_tanggal')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('sales') }}">Kembali</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3>Details</h3>
                        <div class="form-group">
                            <table class="table table-striped" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control item-select" name="barang_id[]" required>
                                                <option value="">Choose Item -</option>
                                                @foreach ($barang as $item)
                                                    <option value="{{ $item->barang_id }}"
                                                        price-data="{{ $item->harga_jual }}">
                                                        {{ $item->barang_nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('barang_id')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="number" class="form-control harga" name="harga[]" readonly>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control jumlah" name="jumlah[]" required>
                                            @error('jumlah')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary mb-4" id="btn-tambah-barang"
                            onclick="addBarangRow()">
                            Add Item
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('.item-select').forEach(select => {
            select.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const harga = selectedOption.getAttribute('price-data');
                const hargaElement = this.closest('tr').querySelector('.harga');
                hargaElement.value = harga;
            });
        });

        function addBarangRow() {
            const tbody = document.querySelector('.table tbody');
            const lastRow = tbody.lastElementChild.cloneNode(true);

            const hargaElement = lastRow.querySelector('.harga');
            const jumlahInput = lastRow.querySelector('.jumlah');

            hargaElement.value = '';
            jumlahInput.value = '';

            lastRow.querySelector('.item-select').addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const harga = selectedOption.getAttribute('price-data');
                const rowIndex = Array.from(tbody.children).indexOf(lastRow);
                document.querySelectorAll('.harga')[rowIndex].value = harga;
            });

            tbody.appendChild(lastRow);
        }
    </script>
@endsection

@push('css')
@endpush

@push('js')
@endpush
