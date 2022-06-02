<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Service\SaveToBDService;

class BaseController extends Controller
{
    public $service;

    public function __construct(SaveToBDService $service) {
        $this->service = $service;
    }
}
