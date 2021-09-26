<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Nicaragua extends Country
{
    public const CODE = 'NIC';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Nicaragua',
        Lang::FR => 'Nicaragua',
    ];
}
