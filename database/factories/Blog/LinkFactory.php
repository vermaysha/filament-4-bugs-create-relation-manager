<?php

namespace Database\Factories\Blog;

use Database\Factories\Concerns\CanCreateImages;
use Database\Seeders\LocalImages;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Link>
 */
class LinkFactory extends Factory
{
    use CanCreateImages;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->url(),
            'title' => Str::title($this->faker->words(asText: true)),
            'description' => $this->faker->sentence(),
            'color' => $this->faker->hexColor(),
            'image' => $this->createImage(LocalImages::SIZE_1280x720),
        ];
    }
}
