# POGOProtos-PHP - Compiled PHP protobufs for Pokémon Go

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Latest Stable Version][ico-githubversion]][link-releases]
[![Total Downloads][ico-downloads]][link-packagist]
[![PHP7 Ready](https://img.shields.io/badge/PHP7-ready-green.svg)][link-packagist]

Protobuf files used: [AeonLucid/POGOProtos](https://github.com/AeonLucid/POGOProtos) - Ready to use in your PHP project

## Installation

Use Composer to install it:
``` bash
$ composer require jaspervdm/pogoprotos-php
```

## Compilation

This repository already contains the compiled classes. To recompile them, run:
``` bash
$ php compile.php
```
This requires the dev-dependencies and [protoc](https://github.com/google/protobuf) in the path

## Usage

See the wiki for some [usage instructions](https://github.com/jaspervdm/pogoprotos-php/wiki/Usage)

## Credits

- [AeonLucid](https://github.com/AeonLucid) for the [proto files](https://github.com/AeonLucid/POGOProtos)
- [protobuf-php](https://github.com/protobuf-php) for the [PHP implementation of Protocol Buffers](https://github.com/protobuf-php/protobuf)
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Legal

This project is in no way affiliated with, authorized, maintained, sponsored or endorsed by Niantic, The Pokémon Company, Nintendo or any of its affiliates or subsidiaries. 
This is an independent and unofficial collection of protobufs compiled to PHP-classes. 
The contents of this repository are a proof of concept and are for educational use only. 
Using this project might be against Niantic's TOS.

[ico-version]: https://img.shields.io/packagist/v/jaspervdm/pogoprotos-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-githubversion]: https://poser.pugx.org/jaspervdm/pogoprotos-php/v/stable
[ico-downloads]: https://img.shields.io/packagist/dt/jaspervdm/pogoprotos-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jaspervdm/pogoprotos-php
[link-releases]: https://github.com/jaspervdm/pogoprotos-php/releases
[link-contributors]: ../../contributors
