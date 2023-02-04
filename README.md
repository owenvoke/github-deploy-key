# github-deploy-key

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A CLI to generate and add Github SSH deploy keys to repos.

> **Note**: Use the [`gh repo deploy-key`](https://cli.github.com/manual/gh_repo_deploy-key) command instead.

## Install

Via Composer

```bash
$ composer require pxgamer/github-deploy-key
```

## Usage

When installing through Composer globally, it should include the `gdk` binary in your path.

Adding a new deploy key:

```bash
gdk add [-t|--token [TOKEN]] [--] <repositories> (<repositories>)
```

```bash
~/$ gdk add -t d3v3l0p3r1234567890abcdefghijklmnopqrstu pxgamer/github-deploy-key
Deploy keys added successfully to the following repositories:
-------------------------------------------------------------

-----BEGIN RSA PRIVATE KEY-----
MIIJKQIBAAKCAg...
-----END RSA PRIVATE KEY-----

Private key for: pxgamer/github-deploy-key
Public key added to: https://github.com/pxgamer/github-deploy-key/settings/keys
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CODE_OF_CONDUCT](.github/CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@pxgamer.xyz instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/github-deploy-key.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/github-deploy-key/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/99626291/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/github-deploy-key.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/github-deploy-key.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/github-deploy-key
[link-travis]: https://travis-ci.org/pxgamer/github-deploy-key
[link-styleci]: https://styleci.io/repos/99626291
[link-code-quality]: https://codecov.io/gh/pxgamer/github-deploy-key
[link-downloads]: https://packagist.org/packages/pxgamer/github-deploy-key
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
