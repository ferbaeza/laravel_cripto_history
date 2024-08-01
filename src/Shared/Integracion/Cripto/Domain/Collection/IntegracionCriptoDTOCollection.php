<?php

namespace Src\Shared\Integracion\Cripto\Domain\Collection;

use Src\Shared\Contrats\Response;
use Baezeta\Kernel\Collection\CollectionBase;
use Src\Shared\Integracion\Cripto\Domain\DTO\IntegracionCriptoDTO;

class IntegracionCriptoDTOCollection extends CollectionBase implements Response
{
    protected $type = IntegracionCriptoDTO::class;

    public function __construct(array $items = [])
    {
        parent::__construct($items);
    }

    public function jsonSerialize(): mixed
    {
        $items = [];
        $this->each(function ($item) use (&$items) {
            $items[] = $item->toArray();
        });
        return $items;
    }
}
