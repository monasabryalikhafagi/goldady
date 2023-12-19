<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\GoldService;

class GoldController extends Controller
{
    private GoldService $goldService;

    public function __construct(GoldService $goldService)
    {
        $this->goldService = $goldService;
    }

    public function buy($id)
    {
        $this->goldService->buy($id);
        return $this->dataResponse(null,"done",200);
    }

}
