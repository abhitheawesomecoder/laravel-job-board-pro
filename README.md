# laravel-job-board-pro

Installation

Step 1 : run command 

composer clearcache

Step 2 : Laravel 5.3 Auth Scafold

php artisan make:auth

Step 3 : Install Composer dependency

composer require abhitheawesomecoder/laravel-job-board-pro

Step 4 : Register the Service Provider

Abhitheawesomecoder\Jobboardpro\JobboardproServiceProvider::class
to providers array in config/app.php


Step 5 : Install views and migrations

run the following command: 'php artisan vendor:publish --force' you can override the views under the folder: 'views/vendor/abhitheawesomecoder/jobboardpro'

Step 6 : Run Migration

php artisan migrate

step 7 : Run composer dump-autoload

step 8 : Run php artisan db:seed --class=JobTableSeeder    

step 9 : Run php artisan db:seed --class=CandidateTableSeeder
