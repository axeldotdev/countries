<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Lithuania extends Country
{
    public const CODE = 'LTA';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Lithuania',
        Lang::FR => 'Lituanie',
    ];
}
