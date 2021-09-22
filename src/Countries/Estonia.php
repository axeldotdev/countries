<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Estonia extends Country
{
    public const CODE = 'EST';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Estonia',
        Lang::FR => 'Estonie',
    ];
}
