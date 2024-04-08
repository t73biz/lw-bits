# Livewire Bits and Bobs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/t73biz/lw-bits.svg?style=flat-square)](https://packagist.org/packages/t73biz/lw-bits)
[![Github Tests Action Status](https://github.com/t73biz/lw-bits/actions/workflows/run-tests.yml/badge.svg)](https://github.com/t73biz/lw-bits/actions/workflows/run-tests.yml)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/t73biz/lw-bits/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/t73biz/lw-bits/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/t73biz/lw-bits.svg?style=flat-square)](https://packagist.org/packages/t73biz/lw-bits)

Live Wire Bits and Bobs is a package to help you with your Livewire projects. It is a collection of components and utilities that I have found useful in my projects. It is a work in progress and I will be adding to it as I go along.

## Installation

You can install the package via composer:

```bash
composer require t73biz/lw-bits
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lw-bits-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lw-bits-views"
```

## Usage

```php
$lwBits = new T73biz\LwBits();
echo $lwBits->echoPhrase('Hello, T73biz!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ron Chaplin](https://github.com/t73biz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
