<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Grenada extends Country
{
    public const CODE = 'GRD';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Grenada',
        Lang::FR => 'Grenada',
    ];
}
