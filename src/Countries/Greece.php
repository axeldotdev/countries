<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Greece extends Country
{
    public const CODE = 'GRC';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Greece',
        Lang::FR => 'Grèce',
    ];
}
