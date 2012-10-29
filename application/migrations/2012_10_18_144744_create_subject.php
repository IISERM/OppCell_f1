<?php

class Create_Subject {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Job Subjects
		Schema::create('jsubjects', function($table)
		{
			// ID
			$table->increments('id');
			
			// Link Fields
				// Job Branch
				$table->integer('jbranch_id')->unsigned();
				// Subject
				$table->integer('subject_id')->unsigned();

			// Timestamps
			$table->timestamps();
		});

		// Program Subjects
		Schema::create('psubjects', function($table)
		{
			// ID
			$table->increments('id');
			
			// Link Fields
				// Program Branch 
				$table->integer('pbranch_id')->unsigned();
				// Subject
				$table->integer('subject_id')->unsigned();

			// Timestamps
			$table->timestamps();
		});

		// Scholarship Subjects
		Schema::create('ssubjects', function($table)
		{
			// ID
			$table->increments('id');
			
			// Link Fields
				// Scholarship Branches
				$table->integer('sbranch_id')->unsigned();
				// Subject
				$table->integer('subject_id')->unsigned();

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
		Schema::drop('jsubjects');
		Schema::drop('psubjects');
		Schema::drop('ssubjects');
	}

}