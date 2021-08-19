<?php

namespace App\Http\Controllers\Goods;

use App\DTO\GoodDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddGoodRequest;
use App\Http\Resources\LoadResource;
use App\Models\Load;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    public function mainGoods()
    {
        return LoadResource::collection(Load::with('points')->get());
    }

    public function addGood(AddGoodRequest $request)
    {
        $load = Load::create([
            'name' => $request->load_city_name,
            'weight' => $request->weight,
        ]);
        foreach ($request->points as $point) {

            $load->points()->create([
                'name' => $point['name']
            ]);
        }
        return new LoadResource($load);
    }
}
