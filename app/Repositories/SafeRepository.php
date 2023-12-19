<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Safe;

class SafeRepository extends Repository
{
    public function __construct(Safe $safe)
    {
        $this->setModel($safe);
    }

}
