# Home Office Technical Test

## Introduction

This assessment is designed to evaluate your coding skills based on readability, maintainability, and testability. 
More than just arriving at the correct solution, we're interested in understanding your problem-solving approach.

## Pre-requisites before Interview

Complete the steps below **before** the interview. This will ensure that you can focus on coding rather than setting up the environment.

1. Set up a development environment on your local machine - [see below](#dev-env) for details. 
2. Clone this project to your local machine.
3. Rename `.env.example` to `.env` and modify any connection / port / URL details in the file to match your setup.
4. Create an empty file within the `database` folder called `database.sqlite`. Your SQLite database will be contained within this single file.
5. Ensure your PHP process has read-write permissions to the the folders `bootstrap/cache`, `storage/logs` and `storage/framework/*`
6. Run `composer install` to install vendor packages.
7. Generate an app key using the command `php artisan key:generate`
8. Run `php artisan migrate`. If prompted, select `Yes` to create the bookstore database. 
9. Run `php artisan test` and ensure the PHPUnit tests run successfully.
10. Manually test the `/api/users` endpoint using `Postman` or `cURL` to confirm functionality is working.
11. Take some time to familiarise yourself with the existing solution and consider how you'd incorporate new features and test your solution.

## <div id="dev-env">Development environment</div>

You will need:
    - an IDE or code editor e.g. [VS Code](https://code.visualstudio.com/)
    - [Laravel 10+](https://laravel.com/docs/10.x/installation) 
    - [PHP 8.3](https://www.php.net/downloads.php) (with [these extensions](https://laravel.com/docs/10.x/deployment#server-requirements) `pdo_sqlite` and `sqlite3`) 
    - [Composer](https://getcomposer.org/) (latest version) and [PHPUnit](https://phpunit.de/index.html)
    - a web server such as `apache`, `nginx` or even the [PHP development server](https://www.php.net/manual/en/features.commandline.webserver.php)
    - `Postman` or `cURL`

Read the [Laravel documentation](https://laravel.com/docs/10.x/installation) for details of how you can use [Laravel Herd](https://herd.laravel.com/) (MacOS), [Homestead](https://laravel.com/docs/10.x/homestead) or [Laragon](https://laragon.org/index.html) (Windows) to get started. If using Laragon, use the Full version (Apache), update PHP and check the correct PHP extensions are installed as above.

## Technologies

The application is written in PHP 8.3 using Laravel 10+ and uses a SQLite database. Tests are written in PHPUnit.

## Database

This project is configured to use a SQLite database called `bookstore`. 
There are two tables called: `books` and `users`.

The entity relationship diagram is shown below:

![Database ERD](./erd.png)

The schema can be found in the `database - migrations` folder. 

The seed data can be found in the `database - seeders` folder. The database can be reseeded by running the tests or `php artisan migrate:fresh --seed`.

 
