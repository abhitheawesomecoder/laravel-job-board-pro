<?php

use Illuminate\Database\Seeder;

class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('candidates')->insert([
         'user_id' => 0,
         'profile_name' => 'Jonathon Roy',
         'profile_pic' => 'images/candidates/1.jpg',
         'profile_title' => 'Graphic Designer',
         'skills' => 'logo design, business card design, web page design',
         'profile_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
         'address' => '2020 Willshire1 Glen,Alpharetta, GA-30009'
     ]);
       DB::table('candidates')->insert([
          'user_id' => 0,
          'profile_name' => 'Thasan Khan',
          'profile_pic' => 'images/candidates/2.jpg',
          'profile_title' => 'Web Designer',
          'skills' => 'html, css, php',
          'profile_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
          'address' => '2020 Willshire2 Glen,Alpharetta, GA-30009'
      ]);
      DB::table('candidates')->insert([
         'user_id' => 0,
         'profile_name' => 'Sara Khan',
         'profile_pic' => 'images/candidates/3.jpg',
         'profile_title' => 'Graphic Designer',
         'skills' => 'logo design, business card design, web page design',
         'profile_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
         'address' => '2020 Willshire1 Glen,Alpharetta, GA-30009'
     ]);
     DB::table('candidates')->insert([
        'user_id' => 0,
        'profile_name' => 'Sophia',
        'profile_pic' => 'images/candidates/4.jpg',
        'profile_title' => 'Web Developer',
        'skills' => 'php, wordpress, laravel',
        'profile_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
        'address' => '2020 Willshire2 Glen,Alpharetta, GA-30009'
    ]);
    }
}
