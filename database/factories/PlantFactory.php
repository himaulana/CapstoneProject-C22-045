<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'link_image' => $this->faker->image(null, 360, 360, 'flower', true),
            'name' => $this->faker->sentence(2),
            'botanic_name' => $this->faker->sentence(4),
            'family' => $this->faker->sentence(1),
            'type' => $this->faker->sentence(2),
            'rating' => $this->faker->randomDigitNotNull(),
            'description' => $this->faker->paragraphs(3),
            'how_plant' => $this->faker->text(100),
            'care_plant' => $this->faker->text(100),
            'pest_disease' => $this->faker->text(100),
            'user_id' => $this->faker->randomDigitNotNull(),
        ];
    }
}
