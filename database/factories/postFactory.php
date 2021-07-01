<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->text,
            'large_image'=>'posts/large_image/img.jpg',
            'views'=>$this->faker->randomNumber(2),
            'shares'=>$this->faker->randomNumber(2),
            'category_id'=>category::all()->random(),
            'user_id'=>User::all()->random()
        ];
    }
}
