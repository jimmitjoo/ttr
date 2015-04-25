<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('races', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('logo_src');
            $table->string('cover_src');
            $table->string('country');
            $table->string('county');
            $table->string('town');
            $table->text('description');
            $table->string('external_link');
            $table->string('signup_link');
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
		Schema::drop('races');
	}

}