<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Weight;

class WeightRepository extends Repository
{
    public function __construct(Weight $weight)
    {
        $this->setModel($weight);
    }

}
