Acme Tools for Symfony
====

![Build Status](https://github.com/headsnet/acme-tools-bundle/actions/workflows/ci.yml/badge.svg)
![Coverage](https://raw.githubusercontent.com/headsnet/acme-tools-bundle/image-data/coverage.svg)
[![Latest Stable Version](https://poser.pugx.org/headsnet/acme-tools-bundle/v)](//packagist.org/packages/headsnet/acme-tools-bundle)
[![Total Downloads](https://poser.pugx.org/headsnet/acme-tools-bundle/downloads)](//packagist.org/packages/headsnet/acme-tools-bundle)
[![License](https://poser.pugx.org/headsnet/acme-tools-bundle/license)](//packagist.org/packages/headsnet/acme-tools-bundle)
[![PHP Version Require](http://poser.pugx.org/headsnet/acme-tools-bundle/require/php)](//packagist.org/packages/headsnet/acme-tools-bundle)

## Installation

```bash
composer require headsnet/acme-tools-bundle
```
If your Symfony installation does not auto-register bundles, add it manually:

```php
// bundles.php
return [
    ...
    Headsnet\AcmeToolsBundle\HeadsnetAcmeToolsBundle::class => ['all' => true],
];
```
## Contributions

Contributions are welcome via Pull Requests. Please include a single change in each PR.

## License

Released under the [MIT License](LICENSE).
