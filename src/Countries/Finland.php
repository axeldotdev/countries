<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Finland extends Country
{
    public const CODE = 'FIN';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Finland',
        Lang::FR => 'Finlande',
    ];
}
