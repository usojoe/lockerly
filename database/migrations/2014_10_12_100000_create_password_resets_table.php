<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration

{
      /**
      * Run the migrations.
      *
      * @return void
      */
      public function up()

      {
        Schema::create('password_resets', function (Blueprint $table)


        {

                    # This is supposed to generate two columns: `created_at` and `updated_at` to
                    # keep track of changes to a row but check if this page is having issues. Try
                    # putting those to columns in manually
                    $table->timestamps();

                    $table->string('email')->index();
                    $table->string('token')->index();

        });
      }

      /**
      * Reverse the migrations.
      *
      * @return void
      */
      public function down()
      {
        Schema::drop('password_resets');
      }
    }
