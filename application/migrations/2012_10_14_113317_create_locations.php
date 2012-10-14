<?php

class Create_Locations {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function($table)
		{
			// ID
			$table->increments('id');
			
			// Name of the Location
			$table->string('name');
			// Parent ID
			$table->integer('parent');
			// Delete or Not
			$table->boolean('deleted');

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
	}

}