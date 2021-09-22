<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Belgium extends Country
{
    public const CODE = 'BEL';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Belgium',
        Lang::FR => 'Belgique',
    ];
}
