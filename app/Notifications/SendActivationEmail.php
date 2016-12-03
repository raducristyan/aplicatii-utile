<?php

namespace App\Notifications;

use App\ActivationToken;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendActivationEmail extends Notification
{
    use Queueable;

    protected $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ActivationToken $token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = route('activate.confirm', [$this->token], true);

        return (new MailMessage)->subject('Activare cont')
                                ->greeting('Bine ați venit!')
                                ->line('Tocmai am creat un cont pentru instituția dumneavoastră.')
                                ->line('Pentru a folosi aplicația trebuie să activați contul instituției accesând butonul de mai jos.')
                                ->action('Activare cont', $url)
                                ->line('Îți mulțumim pentru că folosești aplicația noastră.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
