<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Tonga extends Country
{
    public const CODE = 'TON';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Tonga',
        Lang::FR => 'Tonga',
    ];
}
