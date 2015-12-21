<?php

use Illuminate\Database\Seeder;

class ItemTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('item_type')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'item_type_name' => 'Locker',
          'description' => 'Lockers for VFW Members',
      ]);

      DB::table('item_type')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'item_type_name' => 'Pool Stick',
          'description' => 'Pool Sticks',
      ]);

      DB::table('item_type')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'item_type_name' => 'Parking Space',
          'description' => 'Parking Spaces',
      ]);


    }
}
