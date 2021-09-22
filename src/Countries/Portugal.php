<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Portugal extends Country
{
    public const CODE = 'PRT';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Portugal',
        Lang::FR => 'Portugal',
    ];
}
