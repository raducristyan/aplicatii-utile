<?php

namespace App\Listeners;

use Mail;
use App\ActivationToken;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\SendActivationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendActivationToken
{
    /**
     * Create the event listener.
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
     * @param  InstitutionCreated  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->institution->users()->isAdmin()->first();
        $token = $event->institution->token ?: $event->institution->token()->save(
            new ActivationToken(['token' => str_random( 128 ),
         ]));
        $user->notify(new SendActivationEmail($token));
    }
}
