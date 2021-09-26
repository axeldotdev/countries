<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class SolomonIslands extends Country
{
    public const CODE = 'SLB';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Solomon Islands',
        Lang::FR => 'Solomon Islands',
    ];
}
