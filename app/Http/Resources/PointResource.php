<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\Point */
class PointResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'good' => $this->good,
            'date' => Carbon::parse($this->date)->toAtomString(),
        ];
    }
}
