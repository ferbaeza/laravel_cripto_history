<?php

namespace Src\Shared\Integracion\Cripto\Domain\Factory;

use Baezeta\Kernel\ValueObjects\Main\FechaValue;
use Src\Shared\Integracion\Cripto\Domain\DTO\IntegracionCriptoDTO;
use Src\Shared\Integracion\Cripto\Domain\Collection\IntegracionCriptoDTOCollection;

class IntegracionCriptoFactory
{
    public static function fromRepository(array $data): IntegracionCriptoDTOCollection
    {
        $collection = new IntegracionCriptoDTOCollection();
        foreach ($data as $value) {
            $collection->add(new IntegracionCriptoDTO(
                $value['exchange_id'] ?? '',
                $value['website'] ?? '',
                $value['name'] ?? '',
                self::fecha($value['data_quote_start'] ?? ''),
                self::fecha($value['data_quote_end'] ?? ''),
                self::fecha($value['data_orderbook_start'] ?? ''),
                self::fecha($value['data_orderbook_end'] ?? ''),
                self::fecha($value['data_trade_start'] ?? ''),
                self::fecha($value['data_trade_end'] ?? ''),
                $value['data_symbols_count'] ?? 0,
                $value['volume_1hrs_usd'] ?? 0,
                $value['volume_1day_usd'] ?? 0,
                $value['volume_1mth_usd'] ?? 0,

            ));
        }
        return $collection;
    }

    public static function fecha(string $fecha): FechaValue
    {
        return new FechaValue($fecha);

    }

}
