<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Cuba extends Country
{
    public const CODE = 'CUB';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Cuba',
        Lang::FR => 'Cuba',
    ];
}
