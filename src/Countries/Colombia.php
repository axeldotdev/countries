<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Colombia extends Country
{
    public const CODE = 'COL';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Colombia',
        Lang::FR => 'Colombia',
    ];
}
