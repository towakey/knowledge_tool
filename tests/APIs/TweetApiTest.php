<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\V1\Tweet;

class TweetApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tweet()
    {
        $tweet = Tweet::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/v1/tweets', $tweet
        );

        $this->assertApiResponse($tweet);
    }

    /**
     * @test
     */
    public function test_read_tweet()
    {
        $tweet = Tweet::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/v1/tweets/'.$tweet->id
        );

        $this->assertApiResponse($tweet->toArray());
    }

    /**
     * @test
     */
    public function test_update_tweet()
    {
        $tweet = Tweet::factory()->create();
        $editedTweet = Tweet::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/v1/tweets/'.$tweet->id,
            $editedTweet
        );

        $this->assertApiResponse($editedTweet);
    }

    /**
     * @test
     */
    public function test_delete_tweet()
    {
        $tweet = Tweet::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/v1/tweets/'.$tweet->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/v1/tweets/'.$tweet->id
        );

        $this->response->assertStatus(404);
    }
}
