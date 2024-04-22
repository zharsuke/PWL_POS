<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\SalesDetailModel;
use App\Models\SalesModel;
use App\Models\StokModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Penjualan',
            'list' => ['Home', 'Penjualan']
        ];

        $page = (object) [
            'title' => 'Daftar penjualan yang terdaftar dalam sistem',
        ];

        $activeMenu = 'sales';

        $user = UserModel::all();

        return view('sales.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'user' => $user]);
    }

    public function list(Request $request)
    {
        $sales = SalesModel::select('penjualan_id', 'user_id', 'pembeli', 'penjualan_kode', 'penjualan_tanggal')->with('user');

        if ($request->user_id) {
            $sales->where('user_id', $request->user_id);
        }

        return DataTables::of($sales)
            ->addIndexColumn()
            ->addColumn('action', function ($sales) {
                $btn = '<a href="' . url('/sales/' . $sales->penjualan_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/sales/' . $sales->penjualan_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to delete this data?\');">Delete</button></form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Penjualan',
            'list' => ['Home', 'Penjualan', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah penjualan baru',
        ];

        $activeMenu = 'sales';

        $barang = BarangModel::whereHas('stok', function ($query) {
            $query->where('stok_jumlah', '>', 0);
        })->get();
        $user = UserModel::all();

        $salesCode = 'INV/' . date('Ymd') . '/' . rand(1, 10000);
        $salesDate = date('Y-m-d');

        return view('sales.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'barang' => $barang, 'user' => $user, 'salesCode' => $salesCode, 'salesDate' => $salesDate]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'penjualan_kode' => 'required|string|unique:t_penjualan,penjualan_kode',
            'pembeli' => 'required|string',
            'penjualan_tanggal' => 'required|date',
            'barang_id' => 'required|array',
            'harga' => 'required|array',
            'jumlah' => 'required|array|min:1',
        ]);

        $trans = SalesModel::create([
            'user_id' => $request->user_id,
            'penjualan_kode' => $request->penjualan_kode,
            'pembeli' => $request->pembeli,
            'penjualan_tanggal' => $request->penjualan_tanggal
        ]);

        foreach ($request->barang_id as $index => $barang_id) {
            SalesDetailModel::create([
                'penjualan_id' => $trans->penjualan_id,
                'barang_id' => $barang_id,
                'harga' => $request->harga[$index],
                'jumlah' => $request->jumlah[$index],
            ]);

            $stok = StokModel::where('barang_id', $barang_id)->first();

            if ($stok) {
                $stok->stok_jumlah -= $request->jumlah[$index];

                $stok->save();
            }
        }
        return redirect('/sales')->with('success', 'Data transaksi berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sales = SalesModel::with('user')->find($id);

        $salesDetail = SalesDetailModel::with('sales')->where('penjualan_id', $id)->get();

        $breadcrumb = (object) [
            'title' => 'Detail Penjualan',
            'list' => ['Home', 'Penjualan', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail penjualan',
        ];

        $activeMenu = 'sales';

        return view('sales.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'sales' => $sales, 'salesDetail' => $salesDetail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
