<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Providers\RouteServiceProvider;
use App\Services\User\RegisterService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;

/**
 * Class RegisterController
 * @package App\Http\Controllers\Auth
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new member$member instance after a valid registration.
     *
     * @param  array  $data
     */
    protected function register(RegisterRequest $request)
    {
        /** @var RegisterService $service */
        $service = app(RegisterService::class);
        $user_id = $service->createUser($request->all());

        $member = $service->getLoginUser($user_id);
        event(new Registered($member));

        $this->guard()->login($member);

        return $this->registered($request, $member) ?: redirect($this->redirectPath());
    }
}
