<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' =>$this->faker->numerity('#########'),
            'email' =>$this->faker->safeEmail(),
            'nama' =>$this->faker->name(),
            'tanggal_lahir'=>$this->faker->date(),
            'no_hp' =>$this->faker->phoneNumber()
        ];
    }
}