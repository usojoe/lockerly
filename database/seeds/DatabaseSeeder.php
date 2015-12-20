<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(BooktofromTableSeeder::class);
        $this->call(RentalsTableSeeder::class);
              
        Model::reguard();
    }
}
