<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KaryawanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request) 
    {
         return[
            'id_karyawan'=>$this->id_karyawan,
            'nama_karyawan'=>$this->nama_karyawan, 
         ];
    }
}
