<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class SaintKittsAndNevis extends Country
{
    public const CODE = 'KNA';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Saint Kitts And Nevis',
        Lang::FR => 'Saint Kitts And Nevis',
    ];
}
