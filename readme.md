
## About

CharacterAPI is your own endpoint to find a person by entering the name, like this:

```php
/api/find?name={name}
```

so if you are looking for Chewbacca you're address should looks like:

```php
/api/find?name=Chewbacca
```

You can search for your character with using tools e.g Postman, Boomerangapi, because you have to provide valid token in header.


```php
[{"key":"Authorization","value":"Bearer {token}","description":"","type":"text","enabled":true}]
```

Your authentication token
```php
eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEiLCJuYW1lIjoiTWnFgmVnbyBkbmlhIn0.qqaHR_nnL51A1wWL0SbsADqK2qzxI_HIKQvnfRvNs_E
```
## For admins 

Welcome my friend. 

In env.example you can find

VALID_TOKEN = authentication token to finding chracter by entering name

VALID_TOKEN_ADMIN = authentication token to delete or insert new records

If you want to delete: 
```php
/api/remove-data
```

If you want to insert: 

```php
/api/get-data
```

## And the last thing

Hope you enjoy it
