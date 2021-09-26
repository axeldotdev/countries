<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Jamaica extends Country
{
    public const CODE = 'JAM';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Jamaica',
        Lang::FR => 'Jamaica',
    ];
}
