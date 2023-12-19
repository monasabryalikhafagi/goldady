<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Gold;

class GoldRepository extends Repository
{
    public function __construct(Gold $gold)
    {
        $this->setModel($gold);
    }

}
