<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Lang;

class Vanuatu extends Country
{
    public const CODE = 'VUT';

    public const CONTINENT = Oceania::class;

    public const LABEL = [
        Lang::EN => 'Vanuatu',
        Lang::FR => 'Vanuatu',
    ];
}
