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
             'email' => 'jill@harvard.edu',
             'passoword' => 'helloworld',
         ]);

         DB::table('users')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'first_name' => 'Frank',
             'last_name' => 'Gifford',
             'member_number' => 0000002,
             'email' => 'frank@harvard.edu',
             'passoword' => 'franksworld',
         ]);

         DB::table('users')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'first_name' => 'Jamal',
             'last_name' => 'Baker',
             'member_number' => 0000003,
             'email' => 'jamal@harvard.edu',
             'passoword' => 'helloworld',
         ]);
     }
}
