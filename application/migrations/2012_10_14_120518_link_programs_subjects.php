<?php

class Link_Programs_Subjects {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('program_subject', function($table)
		{
			// ID
			$table->increments('id');
			
			// Program ID
			$table->integer('program_id');
			// Subject ID
			$table->integer('subject_id');

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
		//
	}

}