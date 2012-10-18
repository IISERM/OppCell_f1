<?php

class Recreate_Programs {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('programs');
		Schema::create('programs', function($table)
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
		Schema::drop('programs');
		Schema::create('programs', function($table)
		{
			// ID
			$table->increments('id');
			
			// Name of Institute
			$table->string('name');
			// Link to the Institute Website
			$table->string('link');
			// Location of the Institute
			$table->string('location');
			// Deadline
			$table->timestamp('deadline');
			// Opening
			$table->timestamp('opening');

			// Timestamps
			$table->timestamps();
		});
	}

}