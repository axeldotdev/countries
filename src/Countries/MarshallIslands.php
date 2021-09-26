<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class MarshallIslands extends Country
{
    public const CODE = 'MHL';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'MarshallIslands',
        Lang::FR => 'MarshallIslands',
    ];
}
