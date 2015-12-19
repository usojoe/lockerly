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
             'last_name' => 'Baker',
             'member_number' => 0000001,
             'phone'=> 3333333333,
             'email' => 'jill@harvard.edu',
             'passoword' => 'helloworld',
         ]);

         DB::table('users')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'first_name' => 'Frank',
             'last_name' => 'Gifford',
             'member_number' => 0000002,
             'phone'=> 3333334333,
             'email' => 'frank@harvard.edu',
             'passoword' => 'franksworld',
         ]);

         DB::table('users')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'first_name' => 'Jamal',
             'last_name' => 'Baker',
             'member_number' => 0000003,
             'phone'=> 3333334333,
             'email' => 'jamal@harvard.edu',
             'passoword' => 'helloworld',
         ]);
     }
}
