<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Item',
            'list' => ['Home', 'Item']
        ];

        $page = (object) [
            'title' => 'Daftar item yang terdaftar dalam sistem'
        ];

        $activeMenu = 'item';

        $kategori = KategoriModel::all();

        return view('item.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'kategori' => $kategori]);
    }

    public function list(Request $request) {
        $items = BarangModel::select('barang_id', 'barang_kode', 'barang_nama', 'kategori_id', 'harga_beli', 'harga_jual')->with('kategori');

        if ($request->kategori_id) {
            $items->where('kategori_id', $request->kategori_id);
        }
    
        return DataTables::of($items)
            ->addIndexColumn()
            ->addColumn('action', function ($barang) {
                $btn = '<a href="'.url('/item/' . $barang->barang_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/item/' . $barang->barang_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'.url('/item/'.$barang->barang_id).'">'
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
            'title' => 'Tambah Item',
            'list' => ['Home', 'Item', 'Tambah Item']
        ];

        $page = (object) [
            'title' => 'Tambah item baru'
        ];

        $activeMenu = 'item';

        $kategori = KategoriModel::all();

        return view('item.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'kategori_id' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required'
        ]);

        BarangModel::create([
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'kategori_id' => $request->kategori_id,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual
        ]);

        return redirect('/item')->with('status', 'Data item berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = BarangModel::with('kategori')->find($id);

        $breadcrumb = (object) [
            'title' => 'Detail Item',
            'list' => ['Home', 'Item', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail item'
        ];

        $activeMenu = 'item';

        return view('item.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'item' => $item, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = BarangModel::find($id);
        $kategori = KategoriModel::all();

        $breadcrumb = (object) [
            'title' => 'Edit Item',
            'list' => ['Home', 'Item', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit item'
        ];

        $activeMenu = 'item';

        return view('item.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'item' => $item, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'kategori_id' => 'required'
        ]);

        BarangModel::where('barang_id', $id)->update([
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect('/item')->with('status', 'Data item berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = BarangModel::find($id);

        if (!$check) {
            return redirect('/item')->with('error', 'Data item tidak ditemukan!');
        }

        try {
            $check->delete();
            return redirect('/item')->with('status', 'Data item berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/item')->with('error', 'Data item gagal dihapus!');
        }
    }
}
