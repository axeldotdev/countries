<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Fiji extends Country
{
    public const CODE = 'FJI';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Fiji',
        Lang::FR => 'Fiji',
    ];
}
