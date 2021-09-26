<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Nauru extends Country
{
    public const CODE = 'NRU';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Nauru',
        Lang::FR => 'Nauru',
    ];
}
