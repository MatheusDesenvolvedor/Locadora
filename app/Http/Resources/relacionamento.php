<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class relacionamento extends JsonResource
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
            'genero_id' => $this->genero_id,
            'lista_id' => $this->lista_id,
            'locadora_id' => $this->locadora_id
        ];
    }
}
