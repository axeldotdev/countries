<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Cyprus extends Country
{
    public const CODE = 'CYP';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Cyprus',
        Lang::FR => 'Chipre',
    ];
}
