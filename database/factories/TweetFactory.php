<?php

namespace Database\Factories\V1;

use App\Models\V1\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
        'ref_tweet_id' => $this->faker->word,
        'tweet_type' => $this->faker->randomElement(['tweet', 'retweet', 'reply']),
        'tweet_text' => $this->faker->word,
        'reply_count' => $this->faker->randomDigitNotNull,
        'retweet_count' => $this->faker->randomDigitNotNull,
        'favorite_count' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
