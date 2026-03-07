<?php

namespace App\Http\Controllers;

use App\Service\DiscoverService;

class DiscoverController extends Controller
{
    protected $service;
    public function __construct(DiscoverService $service)
    {
        $this->service = $service;
    }

    //
    public function getRandomList()
    {
        //
        $list = $this->service->getRandomList();

        return $list;
    }

}
