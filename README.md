# Teams

[![License](https://poser.pugx.org/laravel-enso/teams/license)](LICENSE)
[![Stable](https://poser.pugx.org/laravel-enso/teams/version)](https://packagist.org/packages/laravel-enso/teams)
[![Downloads](https://poser.pugx.org/laravel-enso/teams/downloads)](https://packagist.org/packages/laravel-enso/teams)
[![PHP](https://img.shields.io/badge/php-8.2%2B-777bb4.svg)](composer.json)
[![Issues](https://img.shields.io/github/issues/laravel-enso/teams.svg)](https://github.com/laravel-enso/teams/issues)
[![Merge Requests](https://img.shields.io/github/issues-pr/laravel-enso/teams.svg)](https://github.com/laravel-enso/teams/pulls)

## Description

Teams adds lightweight team administration to Laravel Enso.

The package stores team records, manages user membership through a pivot table, exposes CRUD-style API endpoints plus select options, and registers search integration for the team model.

## Installation

Install the package:

```bash
composer require laravel-enso/teams
```

Run the migrations:

```bash
php artisan migrate
```

## Features

- Team model plus many-to-many user membership pivot.
- Index, store, destroy, and options endpoints.
- Request validation through `ValidateTeam`.
- JSON resources for API payloads.
- Search service provider registration for team search integration.

## Usage

Routes are registered under:

- prefix: `api/administration/teams`
- name prefix: `administration.teams.`
- middleware: `api`, `auth`, `core`

Endpoints:

- `GET /`
- `POST /`
- `DELETE {team}`
- `GET options`

The main model is `LaravelEnso\Teams\Models\Team`.

## Depends On

Required Enso packages:

- [`laravel-enso/core`](https://docs.laravel-enso.com/backend/core.html) [↗](https://github.com/laravel-enso/core)
- [`laravel-enso/dynamic-methods`](https://docs.laravel-enso.com/backend/dynamic-methods.html) [↗](https://github.com/laravel-enso/dynamic-methods)
- [`laravel-enso/migrator`](https://docs.laravel-enso.com/backend/migrator.html) [↗](https://github.com/laravel-enso/migrator)
- [`laravel-enso/rememberable`](https://docs.laravel-enso.com/backend/rememberable.html) [↗](https://github.com/laravel-enso/rememberable)
- [`laravel-enso/select`](https://docs.laravel-enso.com/backend/select.html) [↗](https://github.com/laravel-enso/select)

Companion frontend package:

- [`@enso-ui/teams`](https://docs.laravel-enso.com/frontend/teams.html) [↗](https://github.com/enso-ui/teams)

## Contributions

are welcome. Pull requests are great, but issues are good too.

Thank you to all the people who already contributed to Enso!
