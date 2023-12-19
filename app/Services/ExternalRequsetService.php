<?php

namespace App\Services;

use App\Repositories\ExternalRequsetRepository;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;

class ExternalRequsetService extends BaseService
{
    public function __construct(ExternalRequsetRepository $externalRequsetRepository)
    {
        $this->repository = $externalRequsetRepository;
    }

    public function accet(Request $request)
    {
        $this->repository->update($id, ['status'=> $request->status]);
      if($request->status ="accepted")
      {
        /**
         * get request user then check if have externalSafe if exist move gold to it else create one and move gold
         */
           if(!$user->externalSafe)
            {

            }

      }
    }
 

}
