<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Latvia extends Country
{
    public const CODE = 'LVA';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Latvia',
        Lang::FR => 'Lettonie',
    ];
}
