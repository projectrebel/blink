# A complete Laravel blog package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/projectrebel/blink.svg?style=flat-square)](https://packagist.org/packages/projectrebel/blink)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/projectrebel/blink/run-tests?label=tests)](https://github.com/projectrebel/blink/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/projectrebel/blink/Check%20&%20fix%20styling?label=code%20style)](https://github.com/projectrebel/blink/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/projectrebel/blink.svg?style=flat-square)](https://packagist.org/packages/projectrebel/blink)


Blink is a frontend implementation for [Wink](https://github.com/themsaid/wink). Blink + Wink gives you a full working Laravel blog with minimal configuration.

## Installation

You can install the package via composer:

```bash
composer require projectrebel/blink
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="ProjectRebel\Blink\BlinkServiceProvider" --tag="blink-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$blink = new ProjectRebel\Blink();
echo $blink->echoPhrase('Hello, ProjectRebel!');
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

- [Nolan Nordlund](https://github.com/nolannordlund)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
