<?php

namespace Src\Panel\Cripto\Application;

use App\Jobs\MainJob;
use App\Events\MainEvent;
use Illuminate\Support\Facades\File;
use Src\Panel\Cripto\Core\Ports\Driven\PanelCriptoDrivenInterface;

final readonly class PanelCriptoListarMonedasQueryHandler
{
    public function __construct(
        public PanelCriptoDrivenInterface $panelCriptoDrivenAdapter
    )
        {
    }

    public function run(PanelCriptoListarMonedasQuery $query)
    {
        $response = $this->panelCriptoDrivenAdapter->obtenerCriptosFromApi();

        // MainJob::dispatch($response);
        event(new MainEvent($response));

        return $response;
    }
}