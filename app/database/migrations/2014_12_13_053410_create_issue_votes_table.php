<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issue_votes', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->integer('user_id')->foreign('user_id')->reference('id')->on('users');
			$table->integer('issue_id')->foreign('issue_id')->reference('id')->on('issues');
			$table->enum('type',['agree', 'disagree']);
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
		Schema::drop('issue_votes');
	}

}

