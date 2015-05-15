<?php namespace App;

use App\Events\UserHasRegistered;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public static function socialUser($userObject)
    {
        dd($userObject);

        $user = User::where('facebook_provider_id', $userObject->id)->first();
        if (!$user) $user = User::where('email', $userObject->email)->first();

        if (!$user) {
            $user = new User;

            $user->name = $userObject->name;
            $user->email = $userObject->email;
            $user->facebook_provider_id = $userObject->id;
            $user->avatar = $userObject->avatar;

            $user->save();

            event(new UserHasRegistered($user));
        }
        
        return $user;
    }

}
