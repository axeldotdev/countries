<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Labellable;
use Axeldotdev\Countries\Mappable;
use stdClass;
use Tightenco\Collect\Support\Collection;

class Country implements Labellable, Mappable
{
    public const CODE = null;

    public const CONTINENT = null;

    public const LABEL = null;

    public static function getLabel(string $translation): string
    {
        return static::LABEL[$translation];
    }

    public static function getData(string $translation): stdClass
    {
        $country = new stdClass();

        $country->code = static::CODE;
        $country->continent = ${static::CONTINENT}::getData($translation);
        $country->label = static::getLabel($translation);
        $country->labels = new Collection(static::LABEL);

        return $country;
    }
}
