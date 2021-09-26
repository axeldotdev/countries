<?php

namespace Axeldotdev\Countries\Countries;

use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Lang;

class AntiguaAndBarbuda extends Country
{
    public const CODE = 'ATG';

    public const CONTINENT = NorthAmerica::class;

    public const LABEL = [
        Lang::EN => 'Antigua And Barbuda',
        Lang::FR => 'Antigua And Barbuda',
    ];
}
