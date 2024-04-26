<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class UserModel extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password'
    ];

    public function level() {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
