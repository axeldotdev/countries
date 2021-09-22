<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Greece extends Country
{
    public const CODE = 'GRC';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Greece',
        Lang::FR => 'Grèce',
    ];
}
