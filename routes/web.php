<?php

use App\Http\Controllers\Goods\GoodsController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function (GoodsController $allGoods) {
    $goods = $allGoods->mainGoods();
    return view('freight _exchange', compact('goods'));
});

Route::get('/all_goods', function (GoodsController $allGoods) {
    $goods = $allGoods->mainGoods();

    return new Response($goods);
});

Route::post('/add_good', [GoodsController::class, 'addGood']);

