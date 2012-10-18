<?php

class Remove_Position_Program {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('position_program');
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('position_program', function($table)
		{
			// ID
			$table->increments('id');
			
			// Program ID
			$table->integer('program_id');
			// Position ID
			$table->integer('position_id');

			// Timestamps
			$table->timestamps();
		});
	}

}