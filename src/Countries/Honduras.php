<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Honduras extends Country
{
    public const CODE = 'HND';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Honduras',
        Lang::FR => 'Honduras',
    ];
}
