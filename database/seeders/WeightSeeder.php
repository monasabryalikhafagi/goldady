<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\WeightRepository;
class WeightSeeder extends Seeder
{
    private WeightRepository $weightRepository;

    public function __construct(WeightRepository $weightRepository)
    {
      $this->weightRepository = $weightRepository;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->weightRepository->create(['name' => "5g"]);

    }
}
