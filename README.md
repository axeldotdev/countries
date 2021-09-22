# This package give you countries informations.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axeldotdev/countries.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/countries)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/axeldotdev/countries/run-tests?label=tests)](https://github.com/axeldotdev/countries/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/axeldotdev/countries/Check%20&%20fix%20styling?label=code%20style)](https://github.com/axeldotdev/countries/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/axeldotdev/countries.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/countries)

This package give you countries informations.

## Installation

You can install the package via composer:

```bash
composer require axeldotdev/countries
```

## Usage

```php
$countries = Axeldotdev\Countries\Country::all(translation: LANG::EN);

$european_countries = Axeldotdev\Countries\Country::european(translation: Lang::FR);
```

This package only supports english and french. Feel free to add other lang with a PR.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Axel Charpentier](https://github.com/axeldotdev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
