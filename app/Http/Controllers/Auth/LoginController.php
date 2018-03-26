<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\BaseController;
use App\Transformers\TokenTransformer;
use Dingo\Api\Http\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

/**
 * Class LoginController
 * @package App\Http\Controllers\Auth
 */
class LoginController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest', 'web'])->except('logout');
    }

    /**
     * @param Request $request
     * @param User $user
     * @return Response
     */
    protected function authenticated(Request $request, User $user)
    {
        return $this->response->item($user, new TokenTransformer);
    }
}
