<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetailModel extends Model
{
    use HasFactory;

    protected $table = 't_penjualan_detail';
    protected $primaryKey = 'detail_id';

    protected $fillable = [
        'penjualan_id',
        'barang_id',
        'harga',
        'jumlah'
    ];

    public function sales() {
        return $this->belongsTo(SalesModel::class, 'penjualan_id', 'penjualan_id');
    }

    public function barang() {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }
}
