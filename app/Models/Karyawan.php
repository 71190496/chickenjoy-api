<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'Karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = ['nama_karyawan', 'id_user'];

    public function user()
    {
        return $this->hasOne(User::class, 'id_user');
    }
}
