<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
   	{
   		Schema::table('rentals', function($table)
           {
               $table->datetime('rent_from');
               $table->datetime('rent_to');
           });
   	}
   	/**
   	 * Reverse the migrations.
   	 *
   	 * @return void
   	 */
   	public function down()
   	{
   		Schema::table('rentals', function($table)
           {
               $table->dropColumn('rent_from');
               $table->dropColumn('rent_to');
           });
   	}
   }
