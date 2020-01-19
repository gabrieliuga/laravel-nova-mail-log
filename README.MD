# Laravel nova mail log

[![Quality Score](https://img.shields.io/scrutinizer/g/gabrieliuga/laravel-nova-mail-log.svg?style=flat-square)](https://scrutinizer-ci.com/g/gabrieliuga/laravel-nova-mail-log)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/gabrieliuga/laravel-nova-mail-log.svg?style=flat-square)](https://packagist.org/packages/gabrieliuga/laravel-nova-mail-log)
[![StyleCI](https://github.styleci.io/repos/234955975/shield?branch=master)](https://github.styleci.io/repos/234955975)
[![Total Downloads](https://img.shields.io/packagist/dt/gabrieliuga/laravel-nova-mail-log.svg?style=flat-square)](https://packagist.org/packages/gabrieliuga/laravel-nova-mail-log)

Allow view of Mail Log in nova backend


## Installation

You can install the package via composer:

```bash
composer require gabrieliuga/laravel-nova-mail-log
```

## Usage
``` php
NovaServiceProvider.php
<?php

...

    public function resources()
    {
        parent::resources();
        Nova::resources([
            MailLog::class
        ]);
    }
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email me@iuga.dev instead of using the issue tracker.

## Credits

- [Gabriel Iuga](https://github.com/gabrieliuga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
