<?php

use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('rentals')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rent_from' => '12122012',
      'rent_to' => '12122014',
    ]);

    DB::table('rentals')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rent_from' => '12122012',
      'rent_to' => '12122014',
    ]);

    DB::table('rentals')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rent_from' => '12122012',
      'rent_to' => '12122014',
    ]);

    DB::table('rentals')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rent_from' => '12122012',
      'rent_to' => '12122014',
    ]);

    DB::table('rentals')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rent_from' => '12122012',
      'rent_to' => '12122014',

    ]);

  }
}
