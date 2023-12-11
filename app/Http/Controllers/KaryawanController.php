<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Resources\KaryawanResource;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();
        return response()->json(new KaryawanResource($karyawan),200);
    }
}
