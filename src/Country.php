<?php

namespace Axeldotdev\Countries;

use Axeldotdev\Countries\Continents\Africa;
use Axeldotdev\Countries\Continents\Antartica;
use Axeldotdev\Countries\Continents\Asia;
use Axeldotdev\Countries\Continents\Europe;
use Axeldotdev\Countries\Continents\NorthAmerica;
use Axeldotdev\Countries\Continents\Oceania;
use Axeldotdev\Countries\Continents\SouthAmerica;
use Axeldotdev\Countries\Countries\AntiguaAndBarbuda;
use Axeldotdev\Countries\Countries\Argentina;
use Axeldotdev\Countries\Countries\Australia;
use Axeldotdev\Countries\Countries\Austria;
use Axeldotdev\Countries\Countries\Bahamas;
use Axeldotdev\Countries\Countries\Barbados;
use Axeldotdev\Countries\Countries\Belgium;
use Axeldotdev\Countries\Countries\Belize;
use Axeldotdev\Countries\Countries\Bolivia;
use Axeldotdev\Countries\Countries\Brazil;
use Axeldotdev\Countries\Countries\Bulgaria;
use Axeldotdev\Countries\Countries\Canada;
use Axeldotdev\Countries\Countries\Chile;
use Axeldotdev\Countries\Countries\Colombia;
use Axeldotdev\Countries\Countries\CostaRica;
use Axeldotdev\Countries\Countries\Croatia;
use Axeldotdev\Countries\Countries\Cuba;
use Axeldotdev\Countries\Countries\Cyprus;
use Axeldotdev\Countries\Countries\CzechRepublic;
use Axeldotdev\Countries\Countries\Denmark;
use Axeldotdev\Countries\Countries\Dominica;
use Axeldotdev\Countries\Countries\DominicanRepublic;
use Axeldotdev\Countries\Countries\Ecuador;
use Axeldotdev\Countries\Countries\ElSalvador;
use Axeldotdev\Countries\Countries\Estonia;
use Axeldotdev\Countries\Countries\Fiji;
use Axeldotdev\Countries\Countries\Finland;
use Axeldotdev\Countries\Countries\France;
use Axeldotdev\Countries\Countries\Germany;
use Axeldotdev\Countries\Countries\Greece;
use Axeldotdev\Countries\Countries\Grenada;
use Axeldotdev\Countries\Countries\Guatemala;
use Axeldotdev\Countries\Countries\Guyana;
use Axeldotdev\Countries\Countries\Haiti;
use Axeldotdev\Countries\Countries\Honduras;
use Axeldotdev\Countries\Countries\Hungary;
use Axeldotdev\Countries\Countries\Ireland;
use Axeldotdev\Countries\Countries\Italy;
use Axeldotdev\Countries\Countries\Jamaica;
use Axeldotdev\Countries\Countries\Kiribati;
use Axeldotdev\Countries\Countries\Latvia;
use Axeldotdev\Countries\Countries\Lithuania;
use Axeldotdev\Countries\Countries\Luxembourg;
use Axeldotdev\Countries\Countries\Malta;
use Axeldotdev\Countries\Countries\MarshallIslands;
use Axeldotdev\Countries\Countries\Mexico;
use Axeldotdev\Countries\Countries\Micronesia;
use Axeldotdev\Countries\Countries\Nauru;
use Axeldotdev\Countries\Countries\Netherlands;
use Axeldotdev\Countries\Countries\NewZealand;
use Axeldotdev\Countries\Countries\Nicaragua;
use Axeldotdev\Countries\Countries\Panama;
use Axeldotdev\Countries\Countries\PapuaNewGuinea;
use Axeldotdev\Countries\Countries\Paraguay;
use Axeldotdev\Countries\Countries\Peru;
use Axeldotdev\Countries\Countries\Poland;
use Axeldotdev\Countries\Countries\Portugal;
use Axeldotdev\Countries\Countries\Romania;
use Axeldotdev\Countries\Countries\SaintKittsAndNevis;
use Axeldotdev\Countries\Countries\SaintLucia;
use Axeldotdev\Countries\Countries\SaintVincentAndTheGrenadines;
use Axeldotdev\Countries\Countries\Samoa;
use Axeldotdev\Countries\Countries\Slovakia;
use Axeldotdev\Countries\Countries\Slovenia;
use Axeldotdev\Countries\Countries\SolomonIslands;
use Axeldotdev\Countries\Countries\Spain;
use Axeldotdev\Countries\Countries\Suriname;
use Axeldotdev\Countries\Countries\Sweden;
use Axeldotdev\Countries\Countries\Tonga;
use Axeldotdev\Countries\Countries\TrinidadAndTobago;
use Axeldotdev\Countries\Countries\Tuvalu;
use Axeldotdev\Countries\Countries\UnitedStates;
use Axeldotdev\Countries\Countries\Uruguay;
use Axeldotdev\Countries\Countries\Vanuatu;
use Axeldotdev\Countries\Countries\Venezuela;
use Tightenco\Collect\Support\Collection;

class Country
{
    public static function all(string $translation = Lang::EN): Collection
    {
        return static::countries($translation);
    }

    public static function africa(string $translation = Lang::EN): Collection
    {
        return static::continent(Africa::CODE, $translation);
    }

    public static function antartica(string $translation = Lang::EN): Collection
    {
        return static::continent(Antartica::CODE, $translation);
    }

    public static function asia(string $translation = Lang::EN): Collection
    {
        return static::continent(Asia::CODE, $translation);
    }

    public static function europe(string $translation = Lang::EN): Collection
    {
        return static::continent(Europe::CODE, $translation);
    }

    public static function northAmerica(string $translation = Lang::EN): Collection
    {
        return static::continent(NorthAmerica::CODE, $translation);
    }

    public static function oceania(string $translation = Lang::EN): Collection
    {
        return static::continent(Oceania::CODE, $translation);
    }

    public static function southAmerica(string $translation = Lang::EN): Collection
    {
        return static::continent(SouthAmerica::CODE, $translation);
    }

    private static function continent(string $code, string $translation): Collection
    {
        return static::countries($translation)
            ->filter(fn ($country) => $country->continent->code === $code);
    }

    private static function countries(string $translation): Collection
    {
        return new Collection([
            // Afghanistan::getData($translation),
            // Albania::getData($translation),
            // Algeria::getData($translation),
            // Andorra::getData($translation),
            // Angola::getData($translation),
            AntiguaAndBarbuda::getData($translation),
            Argentina::getData($translation),
            // Armenia::getData($translation),
            Australia::getData($translation),
            Austria::getData($translation),
            // Azerbaijan::getData($translation),
            Bahamas::getData($translation),
            // Bahrain::getData($translation),
            // Bangladesh::getData($translation),
            Barbados::getData($translation),
            // Belarus::getData($translation),
            Belgium::getData($translation),
            Belize::getData($translation),
            // Benin::getData($translation),
            // Bhutan::getData($translation),
            Bolivia::getData($translation),
            // BosniaAndHerzegovina::getData($translation),
            // Botswana::getData($translation),
            Brazil::getData($translation),
            // Brunei::getData($translation),
            Bulgaria::getData($translation),
            // BurkinaFaso::getData($translation),
            // Burundi::getData($translation),
            // Cambodia::getData($translation),
            // Cameroon::getData($translation),
            Canada::getData($translation),
            // CapeVerde::getData($translation),
            // CentralAfricanRepublic::getData($translation),
            // Chad::getData($translation),
            Chile::getData($translation),
            // China::getData($translation),
            Colombia::getData($translation),
            // Comoros::getData($translation),
            // DemocraticRepublicOfCongo::getData($translation),
            // Congo::getData($translation),
            CostaRica::getData($translation),
            Croatia::getData($translation),
            Cuba::getData($translation),
            Cyprus::getData($translation),
            CzechRepublic::getData($translation),
            Denmark::getData($translation),
            // Djibouti::getData($translation),
            Dominica::getData($translation),
            DominicanRepublic::getData($translation),
            // EastTimor::getData($translation),
            Ecuador::getData($translation),
            // Egypt::getData($translation),
            ElSalvador::getData($translation),
            // EquatorialGuinea::getData($translation),
            // Eritrea::getData($translation),
            Estonia::getData($translation),
            // Eswatini::getData($translation),
            // Ethiopia::getData($translation),
            Fiji::getData($translation),
            Finland::getData($translation),
            France::getData($translation),
            // Gabon::getData($translation),
            // TheGambia::getData($translation),
            // Georgia::getData($translation),
            Germany::getData($translation),
            // Ghana::getData($translation),
            Greece::getData($translation),
            Grenada::getData($translation),
            Guatemala::getData($translation),
            // Guinea::getData($translation),
            // GuineaBissau::getData($translation),
            Guyana::getData($translation),
            Haiti::getData($translation),
            Honduras::getData($translation),
            Hungary::getData($translation),
            // Iceland::getData($translation),
            // India::getData($translation),
            // Indonesia::getData($translation),
            // Iran::getData($translation),
            // Iraq::getData($translation),
            Ireland::getData($translation),
            // Israel::getData($translation),
            Italy::getData($translation),
            // IvoryCoast::getData($translation),
            Jamaica::getData($translation),
            // Japan::getData($translation),
            // Jordan::getData($translation),
            // Kazakhstan::getData($translation),
            // Kenya::getData($translation),
            Kiribati::getData($translation),
            // NorthKorea::getData($translation),
            // SouthKorea::getData($translation),
            // Kuwait::getData($translation),
            // Kyrgyzstan::getData($translation),
            // Laos::getData($translation),
            Latvia::getData($translation),
            // Lebanon::getData($translation),
            // Lesotho::getData($translation),
            // Liberia::getData($translation),
            // Libya::getData($translation),
            // Liechtenstein::getData($translation),
            Lithuania::getData($translation),
            Luxembourg::getData($translation),
            // Madagascar::getData($translation),
            // Malawi::getData($translation),
            // Malaysia::getData($translation),
            // Maldives::getData($translation),
            // Mali::getData($translation),
            Malta::getData($translation),
            MarshallIslands::getData($translation),
            // Mauritania::getData($translation),
            // Mauritius::getData($translation),
            Mexico::getData($translation),
            Micronesia::getData($translation),
            // Moldova::getData($translation),
            // Monaco::getData($translation),
            // Mongolia::getData($translation),
            // Montenegro::getData($translation),
            // Morocco::getData($translation),
            // Mozambique::getData($translation),
            // Myanmar::getData($translation),
            // Namibia::getData($translation),
            Nauru::getData($translation),
            // Nepal::getData($translation),
            Netherlands::getData($translation),
            NewZealand::getData($translation),
            Nicaragua::getData($translation),
            // Niger::getData($translation),
            // Nigeria::getData($translation),
            // NorthMacedonia::getData($translation),
            // Norway::getData($translation),
            // Oman::getData($translation),
            // Pakistan::getData($translation),
            // Palau::getData($translation),
            // Palestine::getData($translation),
            Panama::getData($translation),
            PapuaNewGuinea::getData($translation),
            Paraguay::getData($translation),
            Peru::getData($translation),
            // Philippines::getData($translation),
            Poland::getData($translation),
            Portugal::getData($translation),
            // Qatar::getData($translation),
            Romania::getData($translation),
            // Russia::getData($translation),
            // Rwanda::getData($translation),
            SaintKittsAndNevis::getData($translation),
            SaintLucia::getData($translation),
            SaintVincentAndTheGrenadines::getData($translation),
            Samoa::getData($translation),
            // San Marino::getData($translation),
            // SaoTomePrincipe::getData($translation),
            // SaudiArabia::getData($translation),
            // Senegal::getData($translation),
            // Serbia::getData($translation),
            // Seychelles::getData($translation),
            // SierraLeone::getData($translation),
            // Singapore::getData($translation),
            Slovakia::getData($translation),
            Slovenia::getData($translation),
            SolomonIslands::getData($translation),
            // Somalia::getData($translation),
            // SouthAfrica::getData($translation),
            // SouthSudan::getData($translation),
            Spain::getData($translation),
            // SriLanka::getData($translation),
            // Sudan::getData($translation),
            Suriname::getData($translation),
            Sweden::getData($translation),
            // Switzerland::getData($translation),
            // Syria::getData($translation),
            // Tajikistan::getData($translation),
            // Tanzania::getData($translation),
            // Thailand::getData($translation),
            // Togo::getData($translation),
            Tonga::getData($translation),
            TrinidadAndTobago::getData($translation),
            // Tunisia::getData($translation),
            // Turkey::getData($translation),
            // Turkmenistan::getData($translation),
            Tuvalu::getData($translation),
            // Uganda::getData($translation),
            // Ukraine::getData($translation),
            // UnitedArabEmirates::getData($translation),
            // UnitedKingdom::getData($translation),
            UnitedStates::getData($translation),
            Uruguay::getData($translation),
            // Uzbekistan::getData($translation),
            Vanuatu::getData($translation),
            // VaticanCity::getData($translation),
            Venezuela::getData($translation),
            // Vietnam::getData($translation),
            // Yemen::getData($translation),
            // Zambia::getData($translation),
            // Zimbabwe::getData($translation),
        ]);
    }
}
