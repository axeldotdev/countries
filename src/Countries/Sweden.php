<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Sweden extends Country
{
    public const CODE = 'SWE';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Sweden',
        Lang::FR => 'Suède',
    ];
}
