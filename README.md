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
set up Your database (mysql) on .env file<br>
            copy it form .env.example<br>
                DB_CONNECTION=mysql<br>
                DB_HOST=127.0.0.1<br>
                DB_PORT=3306<br>
                DB_DATABASE=laravel<br>
                DB_USERNAME=root<br>
                DB_PASSWORD= <br>

run composer install

run php artisan migrate

run php artisan serve
## endpoints

  POST            api/login <br>
  GET|HEAD        api/posts<br>
  POST            api/posts<br>
  GET|HEAD        api/posts/{post}<br>
  PUT|PATCH       api/posts/{post}<br>
  DELETE          api/posts/{post} <br>
  POST            api/posts/{post}/tags<br> 
  DELETE          api/posts/{post}/tags/{tag}<br>
  POST            api/register <br>
  GET|HEAD        api/tags <br>
  POST            api/tags<br>
  GET|HEAD        api/tags/{tag}<br>
  PUT|PATCH       api/tags/{tag}<br>
  DELETE          api/tags/{tag} <br>
  POST            api/logout <br>
## Authors
Daniel

