<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Romania extends Country
{
    public const CODE = 'ROU';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Romania',
        Lang::FR => 'Roumanie',
    ];
}
