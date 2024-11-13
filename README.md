# UNBC Technical Test

## Setup

### With Docker
- Setup containers
  ```
    ./vendor/bin/sail up
  ```
- Execute migrations and seeders
  ```
    ./vendor/bin/sail artisan migrate --seed
  ```
- Run dev
  ```
    ./vendor/bin/sail npm run dev
  ```

### Without Docker
- Config information in ".env" file
- Execute migrations and seeders
  ```
    php artisan migrate --seed
  ```
- Run
  ```
    php artisan serve
  ```
  and
  ```
    npm run dev
  ```
  
> Note: first user credentials are:
> Email: admin@admin.com
> Password: password
