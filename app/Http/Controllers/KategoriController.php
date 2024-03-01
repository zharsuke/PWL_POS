<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index() {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Data successfully inserted!';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Data successfully updated! ' . $row;

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Data successfully deleted! ' . $row;

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}