<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SalesDetailModel;
use App\Models\SalesModel;
use App\Models\StokModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    public function index()
    {
        return SalesModel::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'penjualan_kode' => 'required',
            'pembeli' => 'required',
            'penjualan_tanggal' => 'required',
            'detail' => 'required|array',
            'detail[*].barang_id' => 'required',
            'detail[*].harga' => 'required',
            'detail[*].jumlah' => 'required',
            'detail[*].image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        $sales = SalesModel::create([
            'user_id' => $request->user_id,
            'penjualan_kode' => $request->penjualan_kode,
            'pembeli' => $request->pembeli,
            'penjualan_tanggal' => $request->penjualan_tanggal,
        ]);

        foreach ($request->detail as $value) {
            SalesDetailModel::create([
                'penjualan_id' => $sales->penjualan_id,
                'barang_id' => $value['barang_id'],
                'harga' => $value['harga'],
                'jumlah' => $value['jumlah'],
                'image' => $value['image']->hashName(),
            ]);

            $stok = StokModel::where('barang_id', $value['barang_id'])->first();

            if ($stok) {
                $stok->stok_jumlah -= $value['barang_id'];

                $stok->save();
            }
        }

        return response()->json([$sales], 201);
    }
}
