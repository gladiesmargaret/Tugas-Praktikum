<?php

namespace Database\Factories;

use App\Models\Dosen;
use App\Models\Nidn;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dosen>
 */
class NidnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Nidn::class;
    public function definition(): array
    {
        // $dosen_id_nidn =Dosen::all()->pluck('id_nidn')->toArray();

        return [
            'id_dosen' => $this->faker->unique()->numberBetween(1, 12),
            'nomor_identitas' => $this->faker->unique()->numerify('############')
        ];
    }
}
