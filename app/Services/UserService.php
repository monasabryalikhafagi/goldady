<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;

class UserService extends BaseService
{
    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }
 

}
