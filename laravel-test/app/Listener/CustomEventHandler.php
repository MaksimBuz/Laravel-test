<?php

namespace App\Listener;

use App\Events\CustomEvent;
use App\Models\offer_item;
use App\Models\View;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class CustomEventHandler
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
    public function handle(CustomEvent $event): void
    {   
        echo 'Количество просмторов :'.$event->string;

    }
}
