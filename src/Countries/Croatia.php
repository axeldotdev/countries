<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Croatia extends Country
{
    public const CODE = 'HRV';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Croatia',
        Lang::FR => 'Croatie',
    ];
}
