<?php

namespace App\Listeners;

use App\Jobs\MainJob;
use App\Events\MainEvent;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Main
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
    public function handle(MainEvent $event): void
    {

        dump('Listener executed');
        MainJob::dispatch($event->integracionCriptoDTOCollection);

        File::put('public/currencyProcessed.json', json_encode($event->integracionCriptoDTOCollection));
    }
}
