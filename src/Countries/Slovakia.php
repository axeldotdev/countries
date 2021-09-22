<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Slovakia extends Country
{
    public const CODE = 'SVK';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Slovakia',
        Lang::FR => 'Slovaquie',
    ];
}
