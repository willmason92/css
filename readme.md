# Laradminator
**_[Laravel](https://laravel.com/) PHP Framework with [Adminator](https://github.com/puikinsh/Adminator-admin-dashboard)_**  as admin dash


## Setup:
All you need is to run these commands:
```bash
composer install                   # Install backend dependencies
cp .env.example .env               # Update database credentials configuration
php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:fresh --seed # Run migration and seed users and categories for testing
yarn install                       # or npm i to Install node dependencies
npm run production                 # To compile assets for prod
```


## Demo:
`php artisan serve                  # Check installation`  
Open browser at [localhost:8000/](http://localhost:8000/) 

**Note:**  
Register at [localhost:8000/register](http://localhost:8000/register)

