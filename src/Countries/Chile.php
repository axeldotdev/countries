<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Chile extends Country
{
    public const CODE = 'CHL';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Chile',
        Lang::FR => 'Chile',
    ];
}
