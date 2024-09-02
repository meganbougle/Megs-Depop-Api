<?php

namespace Database\Seeders;

use App\Models\Ropa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RopaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ropa::factory()->count(50)->create();
    }
}
