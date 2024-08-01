<?php

namespace Src\Shared\Integracion\Cripto\Domain\DTO;

use Baezeta\Kernel\Entity\EntityBase;
use Baezeta\Kernel\ValueObjects\Main\FechaValue;

class IntegracionCriptoDTO extends EntityBase implements \JsonSerializable
{
    public function __construct(
        public ?string $exchangeId,
        public ?string $website,
        public ?string $name,
        public ?FechaValue $dataQuoteStart,
        public ?FechaValue $dataQuoteEnd,
        public ?FechaValue $dataOrderbookStart,
        public ?FechaValue $dataOrderbookEnd,
        public ?FechaValue $dataTradeStart,
        public ?FechaValue $dataTradeEnd,
        public ?int $dataSymbolsCount,
        public ?float $volume1hrsUsd,
        public ?float $volume1dayUsd,
        public ?float $volume1mthUsd,
    )
        {
            parent::__construct();
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }

    public function toArray(): mixed
    {
        return [
            'exchange_id' => $this->exchangeId,
            'website' => $this->website,
            'name' => $this->name,
            'data_symbols_count' => $this->dataSymbolsCount,
            'volume_1hrs_usd' => $this->volume1hrsUsd,
            'volume_1day_usd' => $this->volume1dayUsd,
            'volume_1mth_usd' => $this->volume1mthUsd,
        ];
    }

}
