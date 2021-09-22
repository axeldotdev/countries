<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Slovenia extends Country
{
    public const CODE = 'SVN';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Slovenia',
        Lang::FR => 'Slovénie',
    ];
}
