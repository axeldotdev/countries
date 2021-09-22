<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Slovakia extends Country
{
    public const CODE = 'SVK';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Slovakia',
        Lang::FR => 'Slovaquie',
    ];
}
