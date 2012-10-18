<?php

class Create_New_Tables_Jps {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Jobs
		Schema::create('jobs', function($table)
		{
			// ID
			$table->increments('id');

			// Data Fields
				// Name
				$table->string('name');
				// Link (URL)
				$table->string('link');
				// Comments
				$table->text('comments');

			// Timestamps
			$table->timestamps();
		});

		// Programs
		Schema::create('progs', function($table)
		{
			// ID
			$table->increments('id');

			// Data Fields
				// Name
				$table->string('name');
				// Link (URL)
				$table->string('link');
				// Comments
				$table->text('comments');

			// Timestamps
			$table->timestamps();
		});

		// Scholarships
		Schema::create('scholars', function($table)
		{
			// ID
			$table->increments('id');

			// Data Fields
				// Name
				$table->string('name');
				// Link (URL)
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
		Schema::drop('jobs');
		Schema::drop('progs');
		Schema::drop('scholars');
	}

}