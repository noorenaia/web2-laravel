<?php

namespace Database\Factories;

use App\Models\image;
use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imagables=[post::class,User::class];
        $imagable_type = $this->faker->randomElement($imagables);
        return [
            'url'=>$this->faker->url,
            'imageable_type'=>$imagable_type,
            'imageable_id'=>$this->faker->unique()->numberBetween(1,$imagable_type::count())
        ];
    }
}
