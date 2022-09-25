<?php

namespace App\Http\Requests\API\V1;

use App\Models\V1\Tweet;
use InfyOm\Generator\Request\APIRequest;

class UpdateTweetAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = Tweet::$rules;
        
        return $rules;
    }
}
