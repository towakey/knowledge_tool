<?php

namespace App\Repositories;

use App\Models\Tweet;
use App\Repositories\BaseRepository;

/**
 * Class TweetRepository
 * @package App\Repositories
 * @version September 25, 2022, 10:59 pm JST
*/

class TweetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tweet_text'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tweet::class;
    }
}
