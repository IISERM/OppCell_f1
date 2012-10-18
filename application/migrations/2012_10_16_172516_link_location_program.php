<?php

class Link_Location_Program {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location_program', function($table)
		{
			// ID
			$table->increments('id');

			// Location ID
			$table->integer('location_id');
			// Program ID
			$table->integer('program_id');

			// Pivot Data
				// Positions open for the Program
				$table->integer('position');
				// Link to the Program Page
				$table->string('link');
				// Deadline
				$table->timestamp('deadline');
				// Opening
				$table->timestamp('opening');
				// Comments for the Program
				$table->string('comments');
			
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
		Schema::drop('location_program');
	}

}