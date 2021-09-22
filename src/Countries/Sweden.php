<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Sweden extends Country
{
    public const CODE = 'SWE';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Sweden',
        Lang::FR => 'Suède',
    ];
}
