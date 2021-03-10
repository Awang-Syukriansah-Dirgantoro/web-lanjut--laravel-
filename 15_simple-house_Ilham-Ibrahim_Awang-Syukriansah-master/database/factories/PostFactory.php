<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nama = $this->faker->sentence;
        return [
            'nama' => $nama,
            'image'  =>  $this->faker->imageUrl(640,  480,  'animals', true),
            'deskripsi' => $this->faker->realText(),
            'harga' => $this->faker->realText(),
            'jenis' => $this->faker->realText(),
            'draft' => random_int(0, 1),
        ];
    }
}
