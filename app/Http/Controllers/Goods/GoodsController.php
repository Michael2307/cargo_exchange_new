<?php

namespace App\Http\Controllers\Goods;

use App\DTO\GoodDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddGoodRequest;
use App\Models\Loads;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    /**
     * Show the all goods.
     *
     * Route ("/all_goods", method = "GET")
     *
     * @return array
     */
    public function mainGoods(): array
    {
        $goods = [];
        $loads = Loads::all();
        if(! empty($loads)) {
            foreach ($loads as $load) {
                $good = new GoodDTO();
                $good->loadPlace = $load->name;
                $good->weight = $load->weight;

                $pointArr = DB::select('select name, good, date from points where loads_id = ?', [$load->id]);
                foreach ($pointArr as $point) {
                    $good->unloadPlace = $point->name;
                    $good->good = $point->good;
                    $good->date = $point->date;
                }
                $goods[] = $good;
            }
        }
        return $goods;
    }

    /**
     * Add the good.
     * Example for HTTP JSON
     * Route ("/add_good", method = "POST")
     *  {
     *      "load_city_name": "Дніпро",
     *      "weight": "20т",
     *      "unload_city_name": "Одесса",
     *      "good": "ТНП",
     *      "date": "2021-08-20"
     *  }
     *
     * @param AddGoodRequest $request
     * @return Response
     */
    public function addGood(AddGoodRequest $request): Response
    {
        $loads = [];
        $points = [];
        $dbAdds = false;
        if(! empty($request)) {
            $loads['name'] = $request->input('load_city_name');
            $loads['weight'] = $request->input('weight');
            $loadDb = DB::table('loads');
            $id = $loadDb->insertGetId($loads);

            $points['name'] = $request->input('unload_city_name');
            $points['good'] = $request->input('good');
            $points['date'] =  Carbon::parse($request->input('date'));
            $points['loads_id'] = $id;
            DB::table('points')->insert($points);
            $dbAdds = true;
        }

        if ($dbAdds === true) {
            return new Response([
                'success' => true
            ]);
        } else {
            return new Response([
                'success' => false
            ]);
        }
    }
}
