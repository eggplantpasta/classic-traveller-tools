# classic-traveller-tools
Tools for playing the Classic version of the Traveller RPG.

This version is done so I can learn [Laravel](laravel.com).

## Installation

* clone the repository
```
git clone https://github.com/eggplantpasta/classic-traveller-tools.git
cd classic-traveller-tools/cttools
composer install
```

* set up .env and edit database path
```
cp .env.example .env
php artisan key:generate
vi .env
```

* initialise the database and seed dummy data
```
touch database/cttools.sqlite
php artisan migrate --seed
```

## Starting

* serve the application
```
php artisan serve
```

* visit the application [here (http://127.0.0.1:8000)](http://127.0.0.1:8000)

## Stopping

* Use Control-C to exit the artisan server.
