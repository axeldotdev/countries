<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Romania extends Country
{
    public const CODE = 'ROU';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Romania',
        Lang::FR => 'Roumanie',
    ];
}
