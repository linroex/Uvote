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
			$table->increments('id');
			$table->foreign('issue_id')->reference('id')->on('issues');
			$table->foreign('user_id')->reference('id')->on('users');
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

