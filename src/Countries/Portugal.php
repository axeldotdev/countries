<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Portugal extends Country
{
    public const CODE = 'PRT';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Portugal',
        Lang::FR => 'Portugal',
    ];
}
