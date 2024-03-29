<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\CursResource;
use Illuminate\Http\Resources\Json\JsonResource;

class cicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // devuelve todo el objeto
        return parent::toArray($request);

        // // o devuelve solo un campo, o un campo i tot els cursos que te
        // return[
        //     "siglesCamp" => $this->sigles,
        //     "curs" => CursResource ::collection($this->cursos)
        // ];
    }
}
