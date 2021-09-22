<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class France extends Country
{
    public const CODE = 'FRA';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'France',
        Lang::FR => 'France',
    ];
}
