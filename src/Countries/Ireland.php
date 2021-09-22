<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Lang;
use Axeldotdev\Countries\Continents\Europe;

class Ireland extends Country
{
    public const CODE = 'IRL';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        Lang::EN => 'Ireland',
        Lang::FR => 'Irelande',
    ];
}
