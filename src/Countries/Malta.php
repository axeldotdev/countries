<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Malta extends Country
{
    public const CODE = 'MLT';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Malta',
        Lang::FR => 'Malte',
    ];
}
