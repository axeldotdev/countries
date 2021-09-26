<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class TrinidadAndTobago extends Country
{
    public const CODE = 'TTO';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Trinidad And Tobago',
        Lang::FR => 'Trinidad And Tobago',
    ];
}
