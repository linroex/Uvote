<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesVoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues_vote', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('issue_id');
			$table->bigInteger('uid');
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
		Schema::drop('issues_vote');
	}

}

