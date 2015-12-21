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
             'item_type_id' => 1,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 2',
             'item_type_id' => 1,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 3',
             'item_type_id' => 1,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 4',
             'item_type_id' => 1,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 5',
             'item_type_id' => 1,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Locker 6',
             'item_type_id' => 1,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Pool Stick 1',
             'item_type_id' => 2,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Pool Stick 2',
             'item_type_id' => 2,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Pool Stick 3',
             'item_type_id' => 2,
             'item_description' => 'Locker',
         ]);

         DB::table('items')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Pool Stick 4',
             'item_type_id' => 2,
             'item_description' => 'Locker',
         ]);
    }
}
