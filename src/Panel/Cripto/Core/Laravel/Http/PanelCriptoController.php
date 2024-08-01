<?php

namespace Src\Panel\Cripto\Core\Laravel\Http;

use Illuminate\Http\JsonResponse;
use Baezeta\Kernel\Laravel\Controller\BaseController;
use Src\Panel\Cripto\Core\Ports\Driver\PanelCriptoDriverInterface;

class PanelCriptoController extends BaseController
{
    public function __construct(
        public readonly PanelCriptoDriverInterface $panelCriptoInterface
    ) {
        parent::__construct();
    }
    public function obtenerCriptos(): JsonResponse
    {
        $reponse = $this->panelCriptoInterface->obtenerCriptos();
        
        dump('Controller executed');
        return $this->sendResponse('Panel de Info de Criptos', $reponse);
    }


}
