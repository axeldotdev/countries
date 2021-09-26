<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Samoa extends Country
{
    public const CODE = 'WSM';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Samoa',
        Lang::FR => 'Samoa',
    ];
}
