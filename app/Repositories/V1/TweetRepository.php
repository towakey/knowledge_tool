<?php

namespace App\Repositories\V1;

use App\Models\V1\Tweet;
use App\Repositories\BaseRepository;

/**
 * Class TweetRepository
 * @package App\Repositories\V1
 * @version September 26, 2022, 12:08 am JST
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
