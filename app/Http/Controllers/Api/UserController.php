<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserController extends Controller
{
    private UserService $authService;

    public function __construct(UserService $authService)
    {
        $this->userService = $authService;
    }

    public function ceateExternalRequset()
    {

    }

}
