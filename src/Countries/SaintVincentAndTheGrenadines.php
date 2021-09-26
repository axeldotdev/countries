<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class SaintVincentAndTheGrenadines extends Country
{
    public const CODE = 'VCT';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Saint Vincent And The Grenadines',
        Lang::FR => 'Saint Vincent And The Grenadines',
    ];
}
