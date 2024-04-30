<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //user_idは4章5節で登録したものを使用,titleとcontentをfakerを利用してランダム値を生成する
            'user_id'=>3,
            'title'=>fake()->realText(10),
            'content'=>fake()->realText(30)
        ];
    }
}
