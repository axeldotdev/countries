<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Kiribati extends Country
{
    public const CODE = 'KIR';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Kiribati',
        Lang::FR => 'Kiribati',
    ];
}
