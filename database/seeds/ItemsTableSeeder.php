<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 1',
             'item_number' => 0001,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 2',
             'item_number' => 0002,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 3',
             'item_number' => 0003,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 4',
             'item_number' => 0004,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 5',
             'item_number' => 0005,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 6',
             'item_number' => 0006,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 7',
             'item_number' => 0007,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 8',
             'item_number' => 0008,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 9',
             'item_number' => 0009,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 10',
             'item_number' => 0010,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 11',
             'item_number' => 0011,
             'item_description' => 'Member Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 12',
             'item_number' => 0012,
             'item_description' => 'Member Locker',
         ]);
     }
}
