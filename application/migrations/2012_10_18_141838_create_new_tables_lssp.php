<?php

class Create_New_Tables_Lssp
{

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Location
		Schema::create('locations', function($table)
		{
			// ID
			$table->increments('id');

			// Data Fields
				// Name
				$table->string('name');
				// Parent
				$table->integer('parent_id')->default(0)->unsigned();
				// Comments
				$table->text('comments');

			// Timestamps
			$table->timestamps();
		});

		// Subjects
		Schema::create('subjects', function($table)
		{
			// ID
			$table->increments('id');

			// Data Fields
				// Name
				$table->string('name');
				// Parent
				$table->integer('parent_id')->default(0)->unsigned();
				// Comments
				$table->text('comments');

			// Timestamps
			$table->timestamps();
		});

		// Skills
		Schema::create('skills', function($table)
		{
			// ID
			$table->increments('id');

			// Data Fields
				// Name
				$table->string('name');
				// Parent
				$table->integer('parent_id')->default(0)->unsigned();
				// Comments
				$table->text('comments');

			// Timestamps
			$table->timestamps();
		});

		// Positions
		Schema::create('positions', function($table)
		{
			// ID
			$table->increments('id');

			// Data Fields
				// Name
				$table->string('name');
				// Parent
				$table->integer('parent_id')->default(0)->unsigned();
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
		Schema::drop('locations');
		Schema::drop('subjects');
		Schema::drop('skills');
		Schema::drop('positions');
	}

}