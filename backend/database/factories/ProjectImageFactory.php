<?php

namespace Database\Factories;

use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => $this->faker->numberBetween(1, 4),
			'image' => $this->faker->imageUrl(),
			'description' => "<h1>" . substr($this->faker->sentence($nbWords = 2, $variableNbWords = true), 0, -1) . "</h1><p>" . $this->faker->paragraph(3) . "</p>"
        ];
    }
}
