# Laravel Custom App

[![Build Status](https://travis-ci.org/Digital-Serra/laravel-custom.svg?branch=5.1)](https://travis-ci.org/Digital-Serra/laravel-custom)

> For stable Laravel 5.1 use the [5.1 branch](https://github.com/Digital-Serra/laravel-custom/tree/5.1)

## Diferences

This package is a standard laravel 5.1.* installation, but with some additional content and pre-configured

## Additional Content
* Whoops
* Heroku deploy ready, create your app, add [heroku-buildpack-multi](https://github.com/ddollar/heroku-buildpack-multi) and push to heroku
* Laravel Collective
* Repository Layer
* IDE Helper Files for Facades, Models and PhpStorm autocompletation
* Laravel Collective Remote
* Artisan Command for git pull on remote server
* Debugbar
* Bower pre-configured with Jquery, Bootstrap, Font-Awesome and Sweetalert
* Login and register views and routes pre-configured
* Reset password system
* pt-BR language

### Installation

```
composer create-project digitalserra/laravel-custom project-name "dev-master@dev"
``` 
    
* Install the prerequisites
    ```
    npm install
    ```

    ```
    bower install
    ```

    ```
    gulp
    ```

    ```
    php artisan migrate
    ```
    
    Get template options and layouts at [NEON Dashboard Theme](http://demo.neontheme.com/dashboard/main/)

## Docker

This skeleton comes with docker containers preconfigured. See `docker-compose.yml` for adding or removing containers.
For start your containers simply run `./docker-up.sh`.

## Notifications

Set new persistent notifications with:
    
```php
Notify::set('title','type','message')
```
Type must be one of: `info`, `success`, `error` or `warning`
You can automatically set a session message passing `true` as the fourth argument:
```php
Notify::set('title','type','message',true)
```
This will create a session notification based on: [edvinaskrucas/notification](https://github.com/edvinaskrucas/notification)
You can get the number of new notifications created on the latest request using `Notify::getNotificationCount()`

## Testing
This skeleton comes with multiple unit tests
```bash
phpunit
```

#### License

The Laravel framework and this package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
