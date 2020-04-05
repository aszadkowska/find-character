
## About

CharacterAPI is your own endpoint to find a person by entering the name, like this:

```php
/api/characters?name={name}
```

so if you are looking for Chewbacca you're address should looks like:

```php
/api/characters?name=Chewbacca
```

You can search for your character with using tools e.g Postman, Boomerangapi, because you have to provide valid token in header.


```php
[{"key":"Authorization","value":"Bearer {token}","description":"","type":"text","enabled":true}]
```

Your authentication token
```php
eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEiLCJuYW1lIjoiTWnFgmVnbyBkbmlhIn0.qqaHR_nnL51A1wWL0SbsADqK2qzxI_HIKQvnfRvNs_E
```
## Instalations

Welcome my friend. 

Step 1
```php
composer install
```
Step 2
```php
php artisan key:generate
```
Step 3
```php
cp .env.example .env
```
Step 4
```php
Complete your .env file - database connection
```
Step 5
```php
php artisan migrate
```

In .env you can find

VALID_TOKEN = authentication token to finding chracter by entering name

