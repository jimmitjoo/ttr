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

        $user = User::where('facebook_provider_id', $userObject->id)->first();
        if (!$user) $user = User::where('email', $userObject->email)->first();

        if ($user) {
            if (empty($user->facebook_provider_id)) $user->facebook_provider_id = $userObject->id;
            if (empty($user->name)) $user->name = $userObject->name;
            if (empty($user->avatar)) $user->avatar = $userObject->avatar;
            if (empty($user->gender) && self::checkValidGender($userObject)) $user->gender = $userObject->gender;

            $user->save();

            return $user;
        }

        // If user doesn't exists, create a new one
        $user = new User;

        $user->name = $userObject->name;
        $user->email = $userObject->email;
        $user->facebook_provider_id = $userObject->id;
        $user->avatar = $userObject->avatar;
        if (self::checkValidGender($userObject)) $user->gender = $userObject->gender;

        $user->save();

        event(new UserHasRegistered($user));

        return $user;
    }

    /**
     * @param $object
     * @return bool
     */
    public static function checkValidGender($object)
    {
        return $object->gender == 'female' || $object->gender == 'male';
    }

}
