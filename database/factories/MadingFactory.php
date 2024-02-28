<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mading>
 */
class MadingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(mt_rand(2,8)),
            'excerpt' => fake()->paragraph(),
            'category' => fake()->sentence(2),
            'body' => collect(fake()->paragraphs(mt_rand(3,5)))
                        ->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1,2),
        ];
    }
}
