<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class lista extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome
        ];
    }
}
