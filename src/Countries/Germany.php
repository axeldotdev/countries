<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Germany extends Country
{
    public const CODE = 'DEU';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Germany',
        Lang::FR => 'Allemagne',
    ];
}
