# This is my package swytch

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mrakahaikal/swytch.svg?style=flat-square)](https://packagist.org/packages/mrakahaikal/swytch)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mrakahaikal/swytch/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mrakahaikal/swytch/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mrakahaikal/swytch/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mrakahaikal/swytch/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mrakahaikal/swytch.svg?style=flat-square)](https://packagist.org/packages/mrakahaikal/swytch)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require mrakahaikal/swytch
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="swytch-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="swytch-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="swytch-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$swytch = new Mrakahaikal\Swytch();
echo $swytch->echoPhrase('Hello, Mrakahaikal!');
```

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

- [Raka Haikal](https://github.com/mrakahaikal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
