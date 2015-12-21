<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Jill',
          'last_name' => 'Smith',
          'email' => 'jill@harvard.edu',
          'password' => 'helloworld',
          'vfw_member_number' => '2333332',
          'user_type' => 'admin',
          'remember_token' => '$2y$10$08dzOf5iLlE8HgWJJ5Gw1uH3R7DzpNGpODaA3g0Q3S/1vHsOml2bK',
      ]);

      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Jamal',
          'last_name' => 'Smith',
          'email' => 'jamal@harvard.edu',
          'password' => 'helloworld',
          'vfw_member_number' => '2333222',
          'user_type' => 'register',
          'remember_token' => '$2y$10$zYVE/k1O1Mk2oGXDbL1nK.NrQt40woccUy8diSVoa8YvEnkQgv/TW'
      ]);

      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'James',
          'last_name' => 'Smith',
          'email' => 'james@harvard.edu',
          'password' => 'helloworld',
          'vfw_member_number' => '25533332',
          'user_type' => 'admin',
      ]);

      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Betsy',
          'last_name' => 'Smith',
          'email' => 'betsy@harvard.edu',
          'password' => 'helloworld',
          'vfw_member_number' => '233566332',
          'user_type' => 'register',
      ]);


    }
}
