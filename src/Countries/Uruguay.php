<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Uruguay extends Country
{
    public const CODE = 'URY';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Uruguay',
        Lang::FR => 'Uruguay',
    ];
}
