<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Dominica extends Country
{
    public const CODE = 'DMA';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Dominica',
        Lang::FR => 'Dominica',
    ];
}
