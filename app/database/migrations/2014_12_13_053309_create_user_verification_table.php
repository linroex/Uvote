<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVerificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_verification', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->integer('user_id')->foreign('user_id')->reference('id')->on('users');
			$table->string('token')->unique();
			$table->boolean('enable')->default(True);
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
		Schema::drop('user_verification');
	}

}

