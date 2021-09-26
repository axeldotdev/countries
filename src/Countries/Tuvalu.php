<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Tuvalu extends Country
{
    public const CODE = 'TUV';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Tuvalu',
        Lang::FR => 'Tuvalu',
    ];
}
