<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Latvia extends Country
{
    public const CODE = 'LVA';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Latvia',
        Lang::FR => 'Lettonie',
    ];
}
