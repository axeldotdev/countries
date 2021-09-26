<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Canada extends Country
{
    public const CODE = 'CAN';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Canada',
        Lang::FR => 'Canada',
    ];
}
