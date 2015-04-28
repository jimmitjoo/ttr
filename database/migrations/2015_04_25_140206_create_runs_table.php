<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('runs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('race_id');
            $table->string('name');
            $table->integer('distance');
            $table->integer('entry_fee');
            $table->integer('late_entry_fee');
            $table->dateTime('first_entry_datetime');
            $table->dateTime('first_late_entry_datetime');
            $table->dateTime('last_late_entry_datetime');
            $table->dateTime('start_datetime');
            $table->string('cover_src');
            $table->integer('map_id');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('runs');
	}

}