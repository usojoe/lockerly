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
          'password' => '$2y$10$Zyn90naoHx.k3PDhsWQUyOdHQjtew6ljWMGEKSHsWEGagZ0QCg.8K',
          'vfw_member_number' => '2333332',
          'user_type' => 'admin',
          'remember_token' => 'dNC8XtWbsDhqDJXiCDNwSrdZTaC2ANW6wPShqN7VFB0X3O8MIREQY5LU7Xm2',

      ]);

      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Jamal',
          'last_name' => 'Smith',
          'email' => 'jamal@harvard.edu',
          'password' => '$2y$10$zYVE/k1O1Mk2oGXDbL1nK.NrQt40woccUy8diSVoa8YvEnkQgv/TW',
          'vfw_member_number' => '2663322',
          'user_type' => 'register',
      ]);

      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'James',
          'last_name' => 'Smith',
          'email' => 'james@harvard.edu',
          'password' => '$2y$10$zYVE/k1O1Mk2oGXDbL1nK.NrQt40woccUy8diSVoa8YvEnkQgv/TW',
          'vfw_member_number' => '2663322',
          'user_type' => 'admin',
      ]);

      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Betsy',
          'last_name' => 'Smith',
          'email' => 'betsy@harvard.edu',
          'password' => '$2y$10$zYVE/k1O1Mk2oGXDbL1nK.NrQt40woccUy8diSVoa8YvEnkQgv/TW',
          'vfw_member_number' => '233566332',
          'user_type' => 'register',
      ]);


    }
}
