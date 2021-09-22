<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Lithuania extends Country
{
    public const CODE = 'LTA';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Lithuania',
        Lang::FR => 'Lituanie',
    ];
}
