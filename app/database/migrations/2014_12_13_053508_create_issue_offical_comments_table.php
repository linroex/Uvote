<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueOfficalCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issue_offical_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->foreign('user_id')->reference('id')->on('users');
			$table->foreign('issue_id')->reference('id')->on('issues');
			$table->mediumText('content');
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
		Schema::drop('issue_offical_comments');
	}

}

