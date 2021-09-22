<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Slovenia extends Country
{
    public const CODE = 'SVN';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Slovenia',
        Lang::FR => 'Slovénie',
    ];
}
