<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    public function barang() {
        return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    }
}
