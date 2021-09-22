<?php

namespace Axeldotdev\Countries\Continents;

use stdClass;
use Axeldotdev\Countries\Mappable;
use Axeldotdev\Countries\Labellable;
use Tightenco\Collect\Support\Collection;

class Continent implements Labellable, Mappable
{
    public const CODE = null;

    public const LABEL = null;

    public static function getLabel(string $translation): string
    {
        return static::LABEL[$translation];
    }

    public static function getData(string $translation): stdClass
    {
        $continent = new stdClass();

        $continent->code = static::CODE;
        $continent->label = static::getLabel($translation);
        $continent->labels = new Collection(static::LABEL);

        return $continent;
    }
}
