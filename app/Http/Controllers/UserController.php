<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {

        // $data = [
        //     'username' => 'customer 1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 1
        // ];
        // UserModel::insert($data);


        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager Tiga',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        $user = UserModel::findOr(20, ['username', 'nama'], function() {
            abort(404);
        });

        return view('user', ['data' => $user]);
    }
}
