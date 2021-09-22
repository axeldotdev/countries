<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Poland extends Country
{
    public const CODE = 'POL';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Poland',
        Lang::FR => 'Pologne',
    ];
}
