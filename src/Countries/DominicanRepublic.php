<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class DominicanRepublic extends Country
{
    public const CODE = 'DOM';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Dominican Republic',
        Lang::FR => 'Dominican Republic',
    ];
}
