<?php

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jobs')->insert([
         'user_id' => 0,
         'job_title' => 'Graphic Designer',
         'job_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
         'job_location' => '2020 Willshire1 Glen,Alpharetta, GA-30009',
         'job_type' => 'FULLTIME',
         'job_category' => 'Designing',
         'payment' => 200,
         'featured' => false,
         'company_name' => 'Devitems',
         'company_logo' => 'images/company-logo/1.png'
     ]);
     DB::table('jobs')->insert([
        'user_id' => 0,
        'job_title' => 'Web Designer',
        'job_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
        'job_location' => '2020 Willshire2 Glen,Alpharetta, GA-30009',
        'job_type' => 'PARTTIME',
        'job_category' => 'Designing',
        'payment' => 300,
        'featured' => false,
        'company_name' => 'Hastech',
        'company_logo' => 'images/company-logo/2.png'
    ]);
    DB::table('jobs')->insert([
       'user_id' => 0,
       'job_title' => 'Print Designer',
       'job_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
       'job_location' => '2020 Willshire1 Glen,Alpharetta, GA-30009',
       'job_type' => 'INTERNSHIP',
       'job_category' => 'Designing',
       'payment' => 400,
       'featured' => false,
       'company_name' => 'PowerBoosts',
       'company_logo' => 'images/company-logo/3.png'
   ]);
   DB::table('jobs')->insert([
      'user_id' => 0,
      'job_title' => 'UI/UX Designer',
      'job_description' => 'We have earlier made our own custom webshop, which works good. But now we need to add some new features. Its a Laravel 5 Project running on LEMP (Linux, Nginx, MySQL, PHP) stack.PHP, Composer, Laravel, Linux, Nginx, MySQL, JS, SASS. Please send us message if you are interested.',
      'job_location' => '2020 Willshire2 Glen,Alpharetta, GA-30009',
      'job_type' => 'FULLTIME',
      'job_category' => 'Designing',
      'payment' => 500,
      'featured' => true,
      'company_name' => 'CodeCarnival',
      'company_logo' => 'images/company-logo/4.png'
  ]);
    }
}
