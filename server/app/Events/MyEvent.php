<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcastNow
{
use Dispatchable, InteractsWithSockets, SerializesModels;

/**
* Create a new event instance.
*/
public $message;
public function __construct($message)
{
$this->message = $message;
}

/**
* Get the channels the event should broadcast on.
*
* @return array<int, \Illuminate\Broadcasting\Channel>
*/
public function broadcastOn(): array
{
return [
new Channel('my-channel'),
];
}

public function broadcastAs()
{
return 'my-event';
}
}