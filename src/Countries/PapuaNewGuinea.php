<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class PapuaNewGuinea extends Country
{
    public const CODE = 'PNG';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Papua New Guinea',
        Lang::FR => 'Papua New Guinea',
    ];
}
