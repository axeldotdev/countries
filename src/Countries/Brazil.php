<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Brazil extends Country
{
    public const CODE = 'BRA';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Brazil',
        Lang::FR => 'Brazil',
    ];
}
