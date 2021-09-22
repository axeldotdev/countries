<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Austria extends Country
{
    public const CODE = 'AUT';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Austria',
        Lang::FR => 'Autriche',
    ];
}
