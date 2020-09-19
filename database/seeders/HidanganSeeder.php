<?php

namespace Database\Seeders;

use App\Models\Hidangan;
use Illuminate\Database\Seeder;

class HidanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hidangan::factory()->times(50)->create();
    }
}
