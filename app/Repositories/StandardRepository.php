<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Standard;

class StandardRepository extends Repository
{
    public function __construct(Standard $standard)
    {
        $this->setModel($standard);
    }

}
