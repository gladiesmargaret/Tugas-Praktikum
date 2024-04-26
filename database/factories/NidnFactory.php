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
        return [
            'id_nidn' => $this->faker->unique()->numberBetween(1, 10),
            'nomor_identitas' => $this->faker->unique()->numerify('KTD#####')
        ];
    }
}
