<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function login(LoginRequest $request)
    {
        list($data,  $message, $status) = $this->authService->login($request->validated());
        if(!$data)
        {
            return $this->errorResponse($message, null, $status);
        }
        $data['user'] = new UserResource($data['user']);

        return $this->dataResponse($data, $message, $status);
    }
    public function register(RegisterRequest $request)
    {
        $this->authService->register($request->validated());
        return $this->dataResponse(null, "Success", 200);
    }

}
