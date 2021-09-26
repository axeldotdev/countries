<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class CostaRica extends Country
{
    public const CODE = 'CRI';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Costa Rica',
        Lang::FR => 'Costa Rica',
    ];
}
