<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'City Name' => $this->nome,
            'UF Code' => $this->codigo_uf,
            'City Code' => $this->codigo_municipio,

        ];
    }
}
