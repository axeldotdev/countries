<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class NewZealand extends Country
{
    public const CODE = 'NZL';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'New Zealand',
        Lang::FR => 'New Zealand',
    ];
}
