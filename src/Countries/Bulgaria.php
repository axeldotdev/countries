<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Bulgaria extends Country
{
    public const CODE = 'BGR';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Bulgaria',
        Lang::FR => 'Bulgarie',
    ];
}
