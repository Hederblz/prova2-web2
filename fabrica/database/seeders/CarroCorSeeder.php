<?php

namespace Database\Seeders;

use App\Models\CarroCor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroCorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 20; $i++) {
            CarroCor::factory()->create();
        }
    }
}
