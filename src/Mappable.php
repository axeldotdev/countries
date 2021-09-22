<?php

namespace Axeldotdev\Countries;

use stdClass;

interface Mappable
{
    public static function getData(string $translation): stdClass;
}
