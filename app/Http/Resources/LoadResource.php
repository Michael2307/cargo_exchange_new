<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\Load */
class LoadResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'loadPlace' => $this->name,
            'weight' => $this->weight,
            'points'=>PointResource::collection($this->points)
        ];
    }
}
