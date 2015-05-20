<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnRaceToRunInRaceadministratorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('race_administrators', function(Blueprint $table){
            $table->renameColumn('race_id', 'run_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('race_administrators', function(Blueprint $table){
            $table->renameColumn('run_id', 'race_id');
        });
	}

}
