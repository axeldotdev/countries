<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class Guatemala extends Country
{
    public const CODE = 'GTM';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Guatemala',
        Lang::FR => 'Guatemala',
    ];
}
