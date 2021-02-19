<?php

namespace ProjectRebel\Blink\Database\Factories;

use ProjectRebel\Blink\BlinkPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlinkPostFactory extends Factory
{
    protected $model = BlinkPost::class;

    public function definition()
    {
        $published = $this->faker->boolean();

        return [
            'id' => $this->faker->uuid(),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(3, true),
            'published' => $published,
            'publish_date' => $published ? $this->faker->dateTimeBetween('-6 months', '+1 week') : null,
            'featured_image' => $this->faker->imageUrl(),
            'featured_image_caption' => $this->faker->sentence(),
            'author_id' => $this->faker->uuid(),
        ];
    }
}
