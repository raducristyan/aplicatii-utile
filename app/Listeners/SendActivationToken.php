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
        $user = $event->institution->admin()->first();

        $token = $event->institution->token ?: $event->institution->token()->save(
            new ActivationToken([
                'token' => random_bytes(128),
            ])
        );

        $user->notify(new SendActivationEmail($token));
    }
}
