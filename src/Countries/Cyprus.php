<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Cyprus extends Country
{
    public const CODE = 'CYP';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Cyprus',
        Lang::FR => 'Chipre',
    ];
}
