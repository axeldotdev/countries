<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Spain extends Country
{
    public const CODE = 'ESP';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Spain',
        Lang::FR => 'Espagne',
    ];
}
