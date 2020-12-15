<p align="center"><img src="./docs/logo.png" width="38%" alt="Coole"></p>

> This is a skeleton application using the [Coole](https://github.com/guanguans/coole) framework.

![Tests](https://github.com/coolephp/skeleton/workflows/Tests/badge.svg)
![Check & fix styling](https://github.com/coolephp/skeleton/workflows/Check%20&%20fix%20styling/badge.svg)
[![codecov](https://codecov.io/gh/coolephp/skeleton/branch/main/graph/badge.svg?token=URGFAWS6S4)](https://codecov.io/gh/coolephp/skeleton)
[![Latest Stable Version](https://poser.pugx.org/coolephp/skeleton/v)](//packagist.org/packages/coolephp/skeleton)
[![Total Downloads](https://poser.pugx.org/coolephp/skeleton/downloads)](//packagist.org/packages/coolephp/skeleton)
[![License](https://poser.pugx.org/coolephp/skeleton/license)](//packagist.org/packages/coolephp/skeleton)

## Requirement

* PHP >= 7.2

## Installation

``` bash
$ composer create-project coolephp/skeleton -vvv
```

## Quick start service

``` php
$ php coole serve
```

## Documentation

[www.guanguans.cn/coole](https://www.guanguans.cn/coole/)

## Directory Structure

```plain
├── app
│   ├── Command
│   │   └── ServeCommand.php
│   ├── Controller
│   │   └── IndexController.php
│   ├── Event
│   ├── Listener
│   ├── Middleware
│   ├── Model
│   │   └── Model.php
│   └── Provider
│       ├── LoadCommandServiceProvider.php
│       ├── LoadRouteServiceProvider.php
│       └── MiddlewareServiceProvider.php
├── config
│   ├── app.php
│   ├── console.php
│   ├── database.php
│   ├── event.php
│   ├── logger.php
│   ├── route.php
│   └── view.php
├── coole
├── public
│   ├── index.php
│   └── static
├── route
│   └── web.php
├── runtime
├── tests
├── vendor
└── view
```

## Testing

``` bash
$ composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

* [guanguans](https://github.com/guanguans)
* [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
