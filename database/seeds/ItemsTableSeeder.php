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
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 2',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 3',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 4',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 5',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 6',
             'item_description' => 'Member Locker',
             'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 7',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 8',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 9',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 10',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 11',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 12',
             'item_description' => 'Member Locker',
              'item_type' => 'Locker',
         ]);
     }
}
