<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Denmark extends Country
{
    public const CODE = 'DNK';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Denmark',
        Lang::FR => 'Danemark',
    ];
}
