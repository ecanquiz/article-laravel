<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Str;

class ArticleDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\ArticleDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [        
            'presentation_id' => rand(1, 3),
        ];
    }
}

