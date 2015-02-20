<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('avatar')->unique();
			$table->string('department');
			$table->string('email')->unique();
			$table->string('email_edu')->unique();
			$table->string('fbid')->unique();
			$table->string('name');
			$table->enum('type', ['student', 'offical', 'student_gov']);
			$table->boolean('email_confirm');
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
		Schema::drop('users');
	}

}

