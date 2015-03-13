<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoPasswordLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('no_password_logs', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('client_mac', 20);
            $table->integer('user_id');
            $table->string('site', 200);
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
		Schema::drop('no_password_logs');
	}

}
