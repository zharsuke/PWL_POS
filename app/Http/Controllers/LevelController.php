<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
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

    public function add() {
        return view('add_level');
    }

    public function add_save(Request $request) {
        LevelModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama
        ]);
        return redirect('/level');
    }
}
