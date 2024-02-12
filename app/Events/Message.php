<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Message implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
      
     public $username;
     public $message;
 
    /**
     * Create a new event instance.
     *
     * @return void
     */
    
     
     public function __construct($username,$message)
     {
         $this->username = $username;
         $this->message = $message;
     }
 
     public function broadcastOn()
     {
         return new Channel('chatlaravel');
        //  \Log::info('Broadcasting on channel chatlaravel');
        //  return new Channel('chatlaravel');
     }
 
     public function broadcastAs()
     {
         return 'message';
     }
   
}

