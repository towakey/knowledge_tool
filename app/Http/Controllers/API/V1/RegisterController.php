<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends \App\Http\Controllers\Auth\RegisterController
{
    //
    /**
     * 新規ユーザー作成
     * 
     * @SWG\Post(
     *      path="/register",
     *      summary="Store a newly created User in storage",
     *      tags={"Auth"},
     *      description="Store User",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="name",
     *          description="name of User",
     *          type="string",
     *          required=true,
     *          in="formData"
     *      ),
     *      @SWG\Parameter(
     *          name="email",
     *          description="email of User",
     *          type="string",
     *          required=true,
     *          in="formData"
     *      ),
     *      @SWG\Parameter(
     *          name="password",
     *          description="password of User",
     *          type="string",
     *          required=true,
     *          in="formData"
     *      ),
     *      @SWG\Parameter(
     *          name="password_confirmation",
     *          description="password_confirmation of User",
     *          type="string",
     *          required=true,
     *          in="formData"
     *      ),
     *      @SWG\Response(
     *          response=201,
     *          description="successful operation"
     *      )
     * )
     */
}
