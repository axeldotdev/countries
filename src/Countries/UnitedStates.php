<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class UnitedStates extends Country
{
    public const CODE = 'USA';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'United States',
        Lang::FR => 'United States',
    ];
}
