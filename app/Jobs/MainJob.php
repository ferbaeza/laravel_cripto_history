<?php

namespace App\Jobs;

use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Src\Shared\Integracion\Cripto\Domain\Collection\IntegracionCriptoDTOCollection;

class MainJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public IntegracionCriptoDTOCollection $integracionCriptoDTOCollection
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        dump('Job executed');
        // File::put('public/currencyProcessed.json', json_encode($this->integracionCriptoDTOCollection));

    }
}
