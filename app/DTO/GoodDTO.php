<?php

namespace App\DTO;

use Illuminate\Support\Facades\Date;

class GoodDTO extends BasicDTO
{
    /**
     * @var Date
     */
    public $date;

    /**
     * @var string
     */
    public $loadPlace;

    /**
     * @var string
     */
    public $unloadPlace;

    /**
     * @var string
     */
    public $weight;

    /**
     * @var string
     */
    public $good;
}
