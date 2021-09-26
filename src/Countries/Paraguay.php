<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Paraguay extends Country
{
    public const CODE = 'PRY';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Paraguay',
        Lang::FR => 'Paraguay',
    ];
}
