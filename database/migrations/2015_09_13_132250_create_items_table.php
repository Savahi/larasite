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
        // Set the name of the table
        Schema::create('items', function($table) {
          // Create a column for an auto incrementing primary key
          $table->increments('id');						
          // Create a column for the title
          $table->string('title');		
          // Create a column for the description					
          $table->text('description');	
          // Create special fields “created_at” and “updated_at” to store timestamps					
          $table->timestamps();							
        });
    }

    public function down() {
        // If the migration is reversed, drop the table
        Schema::drop('items');							
    }
}
