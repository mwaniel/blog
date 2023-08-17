## blog rest--api 
just a test 
## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites
composer
php
Mysql
PHPUnit

### Setup

clone the project to your  local machine

## Installation 
set up Your database (mysql) on .env file
            copy it form .env.example
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=laravel
                DB_USERNAME=root
                DB_PASSWORD= 

run composer install

run php artisan migrate

run php artisan serve
## endpoints

  POST            api/login <br>
  GET|HEAD        api/posts
  POST            api/posts
  GET|HEAD        api/posts/{post}
  PUT|PATCH       api/posts/{post}
  DELETE          api/posts/{post} 
  POST            api/posts/{post}/tags 
  DELETE          api/posts/{post}/tags/{tag}
  POST            api/register 
  GET|HEAD        api/tags 
  POST            api/tags
  GET|HEAD        api/tags/{tag}
  PUT|PATCH       api/tags/{tag}
  DELETE          api/tags/{tag} 
  POST            api/logout 
## Authors
Daniel

