<?php

use Illuminate\Database\Seeder;

class UserItemRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_item_records')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'item_id' => 1,
          'user_id' => 1,
          'from_date' => '2001-12-02',
          'to_date' => '2003-12-01',
      ]);

      DB::table('user_item_records')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'item_id' => 2,
          'user_id' => 2,
          'from_date' => '2001-12-02',
          'to_date' => '2003-12-01',
      ]);

      DB::table('user_item_records')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'item_id' => 3,
          'user_id' => 3,
          'from_date' => '2001-12-02',
          'to_date' => '2003-12-01',
      ]);
    }
}
