<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\Europe;

class France extends Country
{
    public const CODE = 'fr';

    public const CONTINENT = Europe::class;

    public const LABEL = [
        'en' => 'France',
        'fr' => ' France',
    ];
}
