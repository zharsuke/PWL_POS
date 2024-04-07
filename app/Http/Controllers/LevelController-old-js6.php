<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\LevelModel;
use Illuminate\Http\RedirectResponse;
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

    public function add_save(StorePostRequest $request): RedirectResponse {
        
        $validated = $request->validated();
        
        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        $validated = $request->safe()->except(['level_kode', 'level_nama']);
        
        LevelModel::create($validated);

        return redirect('/level');
    }
}
