<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Panama extends Country
{
    public const CODE = 'PAN';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Panama',
        Lang::FR => 'Panama',
    ];
}
