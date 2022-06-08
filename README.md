Pest Laravel PoC
========================
POC dell'utilizzo di PestPHP su Laravel in BDD/TDD.

![Laravel 9.16](https://img.shields.io/badge/Laravel-9.16-purple.svg?style=flat-square&logo=laravel)
![Php 8.1.4](https://img.shields.io/badge/Php-8.1.4-blue.svg?style=flat-square&logo=php)

## Stack
* Laravel Sail: 1.18.6
* Pest PHP: 1.21.3

#### Requisiti
- Docker

## Preparazione ambiente sviluppo
L'applicazione funziona all'interno di più containers docker. Preparare l'ambiente in questo modo:

### Utilizzo

#### Avviare il progetto
```shell
make up
```

#### Fermare i containers
```shell
make stop
```

### Tools

#### Eseguire PhpStan
```shell
make stan
```

#### Eseguire il fix del coding style
```
make csfix
```

#### Eseguire la batteria di tests (funzionali ed unitari)
```shell
make test
```

#### Ottenere una lista dei comandi disponibili
```
make help
```

### Librerie / Tools
* [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
* [PhpStan](https://phpstan.org/)
* [Pest PHP](https://pestphp.com/)
