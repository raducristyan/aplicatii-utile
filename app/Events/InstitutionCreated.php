<?php

namespace App\Events;

use App\Institution;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class InstitutionCreated
{
    use SerializesModels;

    public $institution;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Institution $institution)
    {
        $this->institution = $institution;
    }
}
