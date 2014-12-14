<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesOfficalCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues_offical_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('uid')->unsigned();
			$table->bigInteger('issue_id')->unsigned();
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
		Schema::drop('issues_offical_comments');
	}

}
