<?php

class Create_Branches
{

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Job Branches
		Schema::create('jbranches', function($table)
			{
				// ID
				$table->increments('id');

				// Link Fields
					// Job
					$table->integer('jobs_id');
					// Location
					$table->integer('locations_id');

				// Data Fields
					// Link
					$table->string('link');
					// Comments
					$table->text('comments');

				// Timestamps
				$table->timestamps();
			});

		// Program Branches
		Schema::create('pbranches', function($table)
			{
				// ID
				$table->increments('id');

				// Link Fields
					// Program
					$table->integer('progs_id');
					// Location
					$table->integer('locations_id');

				// Data Fields
					// Link
					$table->string('link');
					// Comments
					$table->text('comments');

				// Timestamps
				$table->timestamps();
			});

		// Scholarship Branches
		Schema::create('sbranches', function($table)
			{
				// ID
				$table->increments('id');

				// Link Fields
					// Scholarship
					$table->integer('scholars_id');
					// Location
					$table->integer('locations_id');

				// Data Fields
					// Link
					$table->string('link');
					// Comments
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
		Schema::drop('jbranches');
		Schema::drop('pbranches');
		Schema::drop('sbranches');
	}

}