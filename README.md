# Nica TFA7

Laravel TFA7 account management project styled like the Divino Ace project.

## Features

- Create and edit customer records
- Create and edit user records
- Required-field, email, and unique-value validation
- Public avatar uploads limited to 2 MB
- Monochrome layout with floating navigation

## Run

```text
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve --port=8008
```

Open `http://127.0.0.1:8008`.
