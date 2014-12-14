<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_detail', function(Blueprint $table)
		{
			$table->bigInteger('uid')->unique()->unsigned();
			$table->string('avatar')->unique();
			$table->string('email')->unique();
			$table->string('email_edu')->unique();
			$table->string('department');
			$table->enum('type', ['student','offical','student_gov']);
			$table->boolean('status');
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
		Schema::drop('users_detail');
	}

}
