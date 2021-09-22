<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class CzechRepublic extends Country
{
    public const CODE = 'CZE';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'CzechRepublic',
        Lang::FR => 'République Tchèque',
    ];
}
