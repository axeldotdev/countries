<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Bolivia extends Country
{
    public const CODE = 'BOL';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Bolivia',
        Lang::FR => 'Bolivia',
    ];
}
