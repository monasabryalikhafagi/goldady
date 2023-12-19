<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\UserRepository;
class UserSeeder extends Seeder
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
      $this->userRepository = $userRepository;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->userRepository->create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'passwod' => \Hash::make("123456789"),
            'role' => "admin",
        ]);
    }
}
