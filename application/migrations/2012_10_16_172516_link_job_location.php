<?php

class Link_Job_Location {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_location', function($table)
		{
			// ID
			$table->increments('id');

			// Location ID
			$table->integer('location_id');
			// Job ID
			$table->integer('job_id');

			// Pivot Data
				// Positions open for the Job
				$table->integer('position');
				// Link to the Job Page
				$table->string('link');
				// Deadline
				$table->timestamp('deadline');
				// Opening
				$table->timestamp('opening');
				// Comments for the Job
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
		Schema::drop('job_location');
	}

}