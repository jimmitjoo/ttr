<?php namespace App\Handlers\Events;

use App\Events\UserHasRegistered;
use Log;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendWelcomeEmail {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserHasRegistered  $event
	 * @return void
	 */
	public function handle(UserHasRegistered $event)
	{
		Log::info('User ' . $event->user->email . ' has registered!');

        \Mail::send('emails.welcome', ['user' => $event->user], function($message) use ($event){
            $message->to($event->user->email)->subject('Welcome!');
        });
	}

}
