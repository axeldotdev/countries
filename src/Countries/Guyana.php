<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Guyana extends Country
{
    public const CODE = 'GUY';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Guyana',
        Lang::FR => 'Guyana',
    ];
}
