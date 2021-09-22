<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Spain extends Country
{
    public const CODE = 'ESP';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Spain',
        Lang::FR => 'Espagne',
    ];
}
