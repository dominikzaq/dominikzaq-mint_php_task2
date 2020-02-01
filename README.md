# MINT PHP Programmer Task 2
__Symfony:__ Version 5.0.3 

## Requirements:
- composer
- symfony(wget https://get.symfony.com/cli/installer -O - | bash)
- mysql
- php 7.2.5 or higher
- apache2

## .env Configuration
__Set database user, password, adress ip and port__ <br />
DATABASE_URL=mysql://user:password@127.0.0.1:3306/mint?serverVersion=5.7

## Build
__Go to mint_php_task2 directory and run in bash.__ <br />
```composer install```

## Load Fixtures
```php bin/console doctrine:fixtures:load```

__User account__ <br />
user login: user0, user1...,user39 <br />
password: 1234567879

## User admin
route: /admin

## Run app:
__Go to mint_php_task2 directory and run in bash.__ <br />
```symfony server:start```
