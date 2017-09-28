## About
- When a user is created, he receives an e-mail
- When a user updates a mail template, other users receive a notification e-mail

## How to start

Create **.env** file

Install dependencies:
```
composer install
npm i
```
To create assets run:
```
npm run prod
```
Create tables with data:
```
php artisan migrate --seed
```
and:
```
php artisan serve
```
Open http://localhost:8000