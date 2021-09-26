<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Bahamas extends Country
{
    public const CODE = 'BHS';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Bahamas',
        Lang::FR => 'Bahamas',
    ];
}
