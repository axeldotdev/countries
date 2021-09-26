<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class SaintLucia extends Country
{
    public const CODE = 'LCA';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Saint Lucia',
        Lang::FR => 'Saint Lucia',
    ];
}
