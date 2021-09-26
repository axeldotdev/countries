<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Mexico extends Country
{
    public const CODE = 'MEX';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Mexico',
        Lang::FR => 'Mexico',
    ];
}
