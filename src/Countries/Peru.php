<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Peru extends Country
{
    public const CODE = 'PER';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Peru',
        Lang::FR => 'Peru',
    ];
}
