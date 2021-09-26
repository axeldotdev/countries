<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class ElSalvador extends Country
{
    public const CODE = 'SLV';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'El Salvador',
        Lang::FR => 'El Salvador',
    ];
}
