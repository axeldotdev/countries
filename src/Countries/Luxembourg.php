<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Luxembourg extends Country
{
    public const CODE = 'LUX';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Luxembourg',
        Lang::FR => 'Luxembourg',
    ];
}
