<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Hungary extends Country
{
    public const CODE = 'HUN';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Hungary',
        Lang::FR => 'Hongrie',
    ];
}
