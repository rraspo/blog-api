# Blog-api
Small blog API made with Laravel.

# Running the application
```bash
git clone https://github.com/rraspo/blog-api
cd blog-api
composer install
php artisan key:generate
```
After these steps, make sure to update `.env` file with required database credentials so migrations and resources will work.
```bash
php artisan migrate
```

# Test my API
Use my postman collection to test this small API

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/d61452da6469512cb8cf)
