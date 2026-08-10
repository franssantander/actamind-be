<?php

namespace Database\Factories;

use App\Models\Journal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => (string) Str::uuid(),
            'title' => rtrim(fake()->sentence(random_int(4, 10)), '.'),
            'content' => implode("\n\n", fake()->paragraphs(random_int(2, 6))),
        ];
    }

    public function withoutContent(): static
    {
        return $this->state(fn() => ['content' => null]);
    }

    public function short(): static
    {
        return $this->state(fn() => ['content' => fake()->sentence()]);
    }
}
