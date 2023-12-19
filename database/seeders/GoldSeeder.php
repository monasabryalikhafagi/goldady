<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\GoldRepository;
use App\Repositories\StandardRepository;
use App\Repositories\WeightRepository;

class GoldSeeder extends Seeder
{
    private GoldRepository $goldRepository;
    private StandardRepository $standardRepository;
    private WeightRepository $weightRepository;

    public function __construct(
        GoldRepository $goldRepository,
        StandardRepository $standardRepository,
        WeightRepository $weightRepository
        )
    {
      $this->goldRepository = $goldRepository;
      $this->standardRepository = $standardRepository;
      $this->weightRepository = $weightRepository;


    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $this->goldRepository->create([
        'price' => 79,
        'name' => "gold1",
        'standard_id' =>  $this->standardRepository->first()?->id , 
        'weight_id' =>  $this->weightRepository->first()?->id,
       ]); 
    }
}
