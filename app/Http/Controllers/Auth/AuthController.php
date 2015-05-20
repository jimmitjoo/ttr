<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Facades\Socialite as Socialize;
use App\User;


/**
 * Class AuthController
 * @package App\Http\Controllers\Auth
 */
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

    /**
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * @var string
     */
    protected $redirectPath = '/';


	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

    /**
     * @return Socialize
     */
    public function facebook()
    {
        return Socialize::with('facebook')->scopes(['email', 'user_location'])->redirect();
    }

    /**
     * @return Redirect
     */
    public function receive_facebook()
    {
        $socialUser = Socialize::with('facebook')->user();
        $user = User::socialUser($socialUser);

        Auth::login($user);

        return Redirect::to('/');
    }


}
