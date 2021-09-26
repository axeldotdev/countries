<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Venezuela extends Country
{
    public const CODE = 'VEN';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Venezuela',
        Lang::FR => 'Venezuela',
    ];
}
