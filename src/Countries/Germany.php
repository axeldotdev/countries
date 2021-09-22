<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Germany extends Country
{
    public const CODE = 'DEU';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Germany',
        Lang::FR => 'Allemagne',
    ];
}
