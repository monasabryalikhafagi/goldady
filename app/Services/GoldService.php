<?php

namespace App\Services;

use App\Repositories\GoldRepository;
use App\Repositories\SafeRepository;
use App\Services\BaseService;
use Auth;

class GoldService extends BaseService
{
    private SafeRepository $safeRepository;
    public function __construct(GoldRepository $goldRepository, SafeRepository $safeRepository)
    {
        $this->repository = $goldRepository;
        $this->safeRepository = $safeRepository;
    }

    public function buy($id)
    {
        $gold = $this->repository->find($id);

        if (!$gold) {
            return [null, "Not found", 404];
        }
        if ($gold->safe_id) {
            return [null, "Gold  sold", 403];
        }
        if (auth()->user()->internalSafe) {
            $gold->safe_id = auth()->user()->internalSafe->id;
            $gold->save();
        } else {
            $internalSafe = $this->safeRepository->create(['user_id' => auth()->id(), 'type' => 'internal']);
        }
        return [null, "Success", 200];

    }
}
