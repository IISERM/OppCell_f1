<?php

class Create_Positions {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('positions', function($table)
		{
			// ID
			$table->increments('id');
			
			// Name
			$table->string('name');
			// Time in months
			$table->decimal('duration', 2, 2);

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
		Schema::drop('positions');
	}

}