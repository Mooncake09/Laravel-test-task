<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;

use Dingo\Api\Routing\Helpers;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends BaseController
{
    use Helpers;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * @param Request $request
     * @return \Dingo\Api\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        return $this->response->item($user, new UserTransformer);
    }

    /**
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return $this->response->item($user, new UserTransformer);
    }
}
