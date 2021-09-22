<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Belgium extends Country
{
    public const CODE = 'BEL';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Belgium',
        Lang::FR => 'Belgique',
    ];
}
