<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Lang;

class Argentina extends Country
{
    public const CODE = 'ARG';

    public const CONTINENT = SouthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Argentina',
        Lang::FR => 'Argentina',
    ];
}
