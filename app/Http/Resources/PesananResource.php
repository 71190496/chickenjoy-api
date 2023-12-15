<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PesananResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            // 'id_transaksi' => $this->id_transaksi,
            // 'id_user' => $this->id_user,
            'nama_menu' => $this->menu->nama_menu, 
            'total_harga' => $this->total_harga,
            'jumlah_pesanan' => $this->jumlah_pesanan,
        ];
            
    }
}
