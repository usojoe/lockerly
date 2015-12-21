<?php

use Faker\Factory as Faker;
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
             'last_name' => 'Baker',
             'member_number' => 0000001,
             'phone'=> 1-444-444-5555,
             'email' => 'jill@harvard.edu',
             'password' => 'helloworld',
         ]);

         DB::table('users')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'first_name' => 'Frank',
             'last_name' => 'Gifford',
             'member_number' => 0000002,
             'phone'=> 1-444-445-5555,
             'email' => 'frank@harvard.edu',
             'password' => 'franksworld',
         ]);

         DB::table('users')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'first_name' => 'Jamal',
             'last_name' => 'Baker',
             'member_number' => 0000003,
             'phone'=> 1-433-334-5555,
             'email' => 'jamal@harvard.edu',
             'password' => 'helloworld',
         ]);
     }
}
