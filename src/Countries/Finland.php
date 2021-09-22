<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Finland extends Country
{
    public const CODE = 'FIN';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Finland',
        Lang::FR => 'Finlande',
    ];
}
