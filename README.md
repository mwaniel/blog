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

  POST            api/login .......................................... UserController@login
  GET|HEAD        api/posts .......................................... PostController@index
  POST            api/posts ............................ posts.store › PostController@store
  GET|HEAD        api/posts/{post} ....................... posts.show › PostController@show
  PUT|PATCH       api/posts/{post} ................... posts.update › PostController@update
  DELETE          api/posts/{post} ................. posts.destroy › PostController@destroy
  POST            api/posts/{post}/tags ............................ PostController@addTags
  DELETE          api/posts/{post}/tags/{tag} .................... PostController@removeTag
  POST            api/register .................................... UserController@register
  GET|HEAD        api/tags ............................... tags.index › TagController@index
  POST            api/tags ............................... tags.store › TagController@store
  GET|HEAD        api/tags/{tag} ........................... tags.show › TagController@show
  PUT|PATCH       api/tags/{tag} ....................... tags.update › TagController@update
  DELETE          api/tags/{tag} ..................... tags.destroy ›
   
## Authors
Daniel

