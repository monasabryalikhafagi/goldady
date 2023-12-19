<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use Illuminate\Support\Facades\Hash;

class AuthService extends BaseService
{
    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }
 
    public function login($credentials)
    {
          if(Auth::attempt($credentials))
          {
            $user = Auth::user();
            $token = $user->createToken('Goldady')->accessToken;
            return [['user' => $user ,'token'=> $token], 'success', 200];
          }
          return [null, 'Fail', 401];
 
    }
    public function register($data)
    {
      $data['password'] =  Hash::make($data['password']);
      return $this->repository->create($data);
    }
}
