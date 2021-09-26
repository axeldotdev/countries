<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Australia extends Country
{
    public const CODE = 'AUS';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Australia',
        Lang::FR => 'Australia',
    ];
}
