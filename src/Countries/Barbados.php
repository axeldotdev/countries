<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Barbados extends Country
{
    public const CODE = 'BRB';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Barbados',
        Lang::FR => 'Barbados',
    ];
}
