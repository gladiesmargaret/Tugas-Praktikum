<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'nip' => '231402034',
            'email' => 'gladiesmargaret@gmail.com',
            'nama' => 'Gladies Margaret',
            'tanggal_lahir' => '2005-05-02',
            'no_hp' => '087701536746'
        ]);

        // Staff::factory(8)->create();
    }
}
