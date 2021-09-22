<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Hungary extends Country
{
    public const CODE = 'HUN';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Hungary',
        Lang::FR => 'Hongrie',
    ];
}
