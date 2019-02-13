<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Demo User',
                'email' => 'demo@appseed.us',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1GcPBEvDmbe0KM1vETtenu/PKVQKZaf1RQCQLHFuLGD3HlA37upca',
                'remember_token' => NULL,
                'created_at' => '2019-02-13 12:30:37',
                'updated_at' => '2019-02-13 12:30:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Demo User',
                'email' => 'demo2@appseed.us',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Z1d8.4aONwC971QEOUVTNOnqjkjXVxWGPwIkaUBq/2Z4uEHrtjN5K',
                'remember_token' => NULL,
                'created_at' => '2019-02-13 12:43:11',
                'updated_at' => '2019-02-13 12:43:11',
            ),
        ));
        
        
    }
}