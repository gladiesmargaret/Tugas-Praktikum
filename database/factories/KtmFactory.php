<?php

namespace Database\Factories;

use App\Models\Ktm;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ktm>
 */
class KtmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Ktm::class;
    public function definition(): array
    {
        // $mahasiswa_nim = Mahasiswa::all()->pluck('nim')->toArray();

        return [
            // 'nim' => $this->faker->unique()->randomElement(),
            // 'nomor_identitas' => $this->faker->unique()->numerify('KTM######'),
            'id_mahasiswa' => $this->faker->unique()->numberBetween(1, 10),
            'nomor_identitas' => $this->faker->unique()->numerify('KTM#####'),
        ];
    }
}