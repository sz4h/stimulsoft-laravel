# This is my package stimulsoft

[![Latest Version on Packagist](https://img.shields.io/packagist/v/space/stimulsoft.svg?style=flat-square)](https://packagist.org/packages/space/stimulsoft)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/space/stimulsoft/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/space/stimulsoft/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/space/stimulsoft/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/space/stimulsoft/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/space/stimulsoft.svg?style=flat-square)](https://packagist.org/packages/space/stimulsoft)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/stimulsoft.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/stimulsoft)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require space/stimulsoft
```

You can publish the package assets with:

```bash
php artisan vendor:publish --tag="stimulsoft-assets"
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="stimulsoft-config"
```

This is the contents of the published config file:

```php
<?php

// config for Space/Stimulsoft
return [
    // Key or file for the license
    'license' => [
        'key' => env('STIMULSOFT_KEY',null),
        /*
         * Example: license.key
         */
        'file' => env('STIMULSOFT_FILE',null),
    ],

    'viewer' => [
        'options' => [
            /*
             * More at https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_settings.htm
             */
            // Enable full screen mode
            'fullScreenMode' => true,
            // Enable Scrollbar mode
            'scrollbarsMode' => true,
            // Height for non-fullscreen mode
            'height' => '600px',
        ]
    ]
];

```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="stimulsoft-views"
```

## Usage

```php
return Space\Stimulsoft\Facades\Stimulsoft::make()
    ->setTemplate('reports/SimpleList.mrt')
    ->view();
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

- [Ahmed Safaa](https://github.com/sz4h)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
