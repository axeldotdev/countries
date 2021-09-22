<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Lang;

class Bulgaria extends Country
{
    public const CODE = 'BGR';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Bulgaria',
        Lang::FR => 'Bulgarie',
    ];
}
