<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRunsTableAddFortime extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('runs', function(Blueprint $table)
        {
            $table->time('fortime')->after('start_datetime');
            $table->time('tempo')->after('fortime');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('runs', function(Blueprint $table)
        {
            $table->dropColumn('fortime');
            $table->dropColumn('tempo');
        });
	}

}
