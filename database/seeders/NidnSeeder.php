<?php

namespace Database\Seeders;

use App\Models\Nidn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NidnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nidn::factory(9)->create();
    }
}
