<?php

namespace Axeldotdev\Countries;

interface Labellable
{
    public static function getLabel(string $translation): string;
}
