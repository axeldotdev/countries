<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Croatia extends Country
{
    public const CODE = 'HRV';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Croatia',
        Lang::FR => 'Croatie',
    ];
}
