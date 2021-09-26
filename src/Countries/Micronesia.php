<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Micronesia extends Country
{
    public const CODE = 'FSM';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Micronesia',
        Lang::FR => 'Micronesia',
    ];
}
