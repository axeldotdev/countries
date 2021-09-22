<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Italy extends Country
{
    public const CODE = 'ITA';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Italy',
        Lang::FR => 'Italie',
    ];
}
