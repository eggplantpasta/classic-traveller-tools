# classic-traveller-tools
Tools for playing the Classic version of the Traveller RPG.

This version is done so I can learn [Laravel](laravel.com).

## Installation

* clone the repository
```
git clone https://github.com/eggplantpasta/classic-traveller-tools.git
cd classic-traveller-tools/cctools
composer install
```

* set up .env and edit database path
```
cp .env.example .env
vi .env
```

* initialise the database
```
touch database/cctools.sqlite
php artisan migrate
```

## Starting

* serve the application
```
php artisan serve
```

* visit the application [here (http://127.0.0.1:8000)](http://127.0.0.1:8000)

## Stopping

* Use Control-C to exit the artisan server.
```
^C
```
