<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Ecuador extends Country
{
    public const CODE = 'ECU';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Ecuador',
        Lang::FR => 'Ecuador',
    ];
}
