<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(7, true),
            'body' => $this->faker->paragraph(40),
            'description' => $this->faker->paragraph(10),
            'published_at'=>$this->faker->dateTime(),
            'image' =>$this->faker->imageUrl($width=288, $height=210, 'cats') ,
            'author_id'=>$this->faker->numberBetween(1,10),
            'rubric_id'=>$this->faker->numberBetween(1,5),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime(),
        ];
    }
}
