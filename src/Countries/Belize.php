<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Belize extends Country
{
    public const CODE = 'BLZ';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Belize',
        Lang::FR => 'Belize',
    ];
}
