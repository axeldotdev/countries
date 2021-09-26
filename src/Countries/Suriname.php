<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Suriname extends Country
{
    public const CODE = 'SUR';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Suriname',
        Lang::FR => 'Suriname',
    ];
}
