<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    // public function index()
    // {
    //     $data = [
    //         'kategori_kode' => 'SNK',
    //         'kategori_nama' => 'Snack/Makanan Ringan',
    //         'created_at' => now()
    //     ];
    //     DB::table('m_kategori')->insert($data);
    //     return 'Data successfully inserted!';

    //     $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    //     return 'Data successfully updated! ' . $row;

    //     $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //     return 'Data successfully deleted! ' . $row;

    //     $data = DB::table('m_kategori')->get();
    //     return view('kategori', ['data' => $data]);
    // }

    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create() {
        return view('kategori.create');
    }

    public function store(Request $request) {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori
        ]);

        return redirect('/kategori');
    }

    public function update($id) {
        $data = KategoriModel::find($id);
        return view('kategori.update', ['kategori' => $data]);
    }

    public function update_save(Request $request, $id) {
        $data = KategoriModel::find($id);
        $data->kategori_kode = $request->kodeKategori;
        $data->kategori_nama = $request->namaKategori;
        $data->save();

        return redirect('/kategori');
    }

    public function delete($id) {
        $data = KategoriModel::find($id);
        $data->delete();

        return redirect('/kategori');
    }
}
