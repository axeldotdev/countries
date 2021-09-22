<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Continent;
use Axeldotdev\Countries\Labellable;
use Axeldotdev\Countries\Mappable;
use stdClass;
use Tightenco\Collect\Support\Collection;

class Country implements Labellable, Mappable
{
    public const CODE = null;

    public const CONTINENT = Continent::class;

    public const LABEL = null;

    public static function getLabel(string $translation): string
    {
        return static::LABEL[$translation];
    }

    public static function getData(string $translation): stdClass
    {
        $continent = static::CONTINENT;
        $country = new stdClass();

        $country->code = static::CODE;
        $country->continent = $continent::getData($translation);
        $country->label = static::getLabel($translation);
        $country->labels = new Collection(static::LABEL);

        return $country;
    }
}
