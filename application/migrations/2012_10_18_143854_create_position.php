<?php

class Create_Position {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Job Positions
		Schema::create('jpositions', function($table)
		{
			// ID
			$table->increments('id');

			// Link Fields
				// Job Branch
				$table->integer('jbranches_id');
				// Position Branch
				$table->integer('positions_id');
			// Data Fields
				// Dates
					// Opening
					$table->timestamp('opening');
					// Deadline
					$table->timestamp('deadline');
				// Link
				$table->string('link');
			
			// Timestamps
			$table->timestamps();
		});

		// Programs Positions
		Schema::create('ppositions', function($table)
		{
			// ID
			$table->increments('id');

			// Link Fields
				// Program Branch
				$table->integer('pbranches_id');
				// Position Branch
				$table->integer('positions_id');
			// Data Fields
				// Dates
					// Opening
					$table->timestamp('opening');
					// Deadline
					$table->timestamp('deadline');
				// Link
				$table->string('link');
			
			// Timestamps
			$table->timestamps();
		});

		// Scholarships Positions
		Schema::create('spositions', function($table)
		{
			// ID
			$table->increments('id');

			// Link Fields
				// Scholarship Branch
				$table->integer('sbranches_id');
				// Position Branch
				$table->integer('positions_id');
			// Data Fields
				// Dates
					// Opening
					$table->timestamp('opening');
					// Deadline
					$table->timestamp('deadline');
				// Link
				$table->string('link');
			
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
		Schema::drop('jpositions');
		Schema::drop('ppositions');
		Schema::drop('spositions');
	}

}