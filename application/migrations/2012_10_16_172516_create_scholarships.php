<?php

class Create_Scholarships {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scholarships', function($table)
		{
			// ID
			$table->increments('id');

			// Name of Institute
			$table->string('name');
			// Comments regarding Institute
			$table->text('comments');

			// Timestamps
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('scholarships');
	}

}