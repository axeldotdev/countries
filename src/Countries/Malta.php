<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Malta extends Country
{
    public const CODE = 'MLT';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Malta',
        Lang::FR => 'Malte',
    ];
}
