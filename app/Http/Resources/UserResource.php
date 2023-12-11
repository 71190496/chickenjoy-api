<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request) 
    {
         return[
            'id_user'=>$this->id_user,
            'username'=>$this->username,
            'password'=>$this->password,
            'role'=>$this->role,
         ];
    }
}
