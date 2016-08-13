# POGOProtos-PHP
Compiled PHP protobufs for pokemon go

Protobuf files used: https://github.com/AeonLucid/POGOProtos

## Installation
Use Composer to install it:
``` bash
composer require jaspervdm/pogoprotos-php
```

## Compilation
This repository already contains the compiled classes. To recompile them, run
``` bash
php compile.php
```
This requires the dev-dependencies and [protoc](https://github.com/google/protobuf) in the path

## Usage
See the wiki for some [usage instructions](https://github.com/jaspervdm/pogoprotos-php/wiki/Usage)
