<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\StandardRepository;
class StandardSeeder extends Seeder
{
     private StandardRepository $standardRepository;

    public function __construct(StandardRepository $standardRepository)
    {
      $this->standardRepository = $standardRepository;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->standardRepository->create(['name' => "21"]);
    }
}
