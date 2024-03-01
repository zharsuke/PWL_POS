<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index() {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);

        // return 'Data successfully inserted!';
        // $rows = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Data successfully updated! ' . $rows;

        // $rows = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Data successfully deleted! ' . $rows;

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
}
