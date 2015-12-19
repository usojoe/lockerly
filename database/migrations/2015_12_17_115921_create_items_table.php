<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration

{
      /**
      * Run the migrations.
      *
      * @return void
      */
      public function up() {

        Schema::create('items', function($table)

        {

                      $table->increments('id');

                      $table->string('title');
                      $table->text('item_description');
                      $table->string('item_number');

                      # this one was giving me issues at first but I think I've got it now ..
                      $table->timestamps();

                      # Skipping the 'tags' field

        });
      }

      /**
      * Reverse the migrations.
      *
      * @return void
      */
      public function down()
              {
                Schema::drop('items');
              }
    }
