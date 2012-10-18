<?php

class Link_Location_Scholarship {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location_scholarship', function($table)
		{
			// ID
			$table->increments('id');

			// Location ID
			$table->integer('location_id');
			// Scholarship ID
			$table->integer('scholarship_id');

			// Pivot Data
				// Positions open for the Scholarship
				$table->integer('position');
				// Link to the Scholarship Page
				$table->string('link');
				// Deadline
				$table->timestamp('deadline');
				// Opening
				$table->timestamp('opening');
				// Comments for the Scholarship
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
		Schema::drop('location_scholarship');
	}

}