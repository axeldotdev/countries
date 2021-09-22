<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Netherlands extends Country
{
    public const CODE = 'NLD';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Netherlands',
        Lang::FR => 'Pays-Bas',
    ];
}
