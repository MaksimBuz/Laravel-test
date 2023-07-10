<?php

namespace App\Listener;

use App\Events\CustomEventLikes;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CustomEventLikesHandler
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CustomEventLikes $event): void
    {
        echo 'Была поставлена отметка нравится';
    }
}
