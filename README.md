# Sistem Informasi Kampus Template
> Based on [Laravel v10](https://laravel.com)
> Admin template used [Soft UI Dashboard](https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html?_ga=2.139625715.1105593184.1681832502-697065897.1681622534)

## Table of contents

- [Prerequisites](#prerequisites)
- [Setup](#setup)
- [Database setup](#database-setup)
- [Running the app](#running-the-app)

## Prerequisites

- PHP ≥ 8.1

Please install these extensions on your code editor :

- [laravel intellisense](https://marketplace.visualstudio.com/items?itemName=mohamedbenhida.laravel-intellisense)

## Setup
If you want to used clone method, follow step down bellow:
1. Clone this repository:
```sh
$ git clone https://github.com/akhmadrizki/siinfus-complete-template.git
```
2. Copy file `.env.example` to `.env`:
```sh
$ cp env-example .env
```
3. Install all package
```sh
$ composer install
```

## Database setup

```sh
...
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
...
```

- Run this command:
```sh
$ php artisan key:generate
$ composer dump-autoload
```

## Running the app

```sh
$ php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
