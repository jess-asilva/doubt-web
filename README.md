# DOUBT

Doubt ia a web system developed by ETEC students to help schools and students to give and get support to achieve their goals in the knowledge world!

## Requirements

- An Environment for [Laravel 10](https://laravel.com/docs/10.x)
- PHP >= 8.1
- [Composer](https://getcomposer.org/)
- [MySQL 8](https://dev.mysql.com/downloads/)

If you use [docker](https://www.docker.com/), here you will find a complete environment container.

## Installation

Clone or download this repository.

Copy `.env.example` to `.env`. After that, follow one of next option.

### Docker

At the root of the project there is a Dockerfile and docker-compose.yml files with requirements to run the project.
You can run with docker by building the image and running it.

Execute:

```bash
# Build/start container
docker-compose up

# Execute migrate
docker exec -ti doubt php artisan migrate --seed --force
```

You'll have API running on http://localhost

### Local

Add database configuration on `.env` file.

```bash
# Install packages
composer install

# Creates database and populating it
php artisan migrate --seed

# Set the project secret key
php artisan key:generate

# Create the symbolic links to storage
php artisan storage:link

# Start application
php artisan serve
```

You'll have API running on http://localhost:8000
