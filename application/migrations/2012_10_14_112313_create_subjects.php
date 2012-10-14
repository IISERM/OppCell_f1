<?php

class Create_Subjects {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subjects', function($table)
		{
			// ID
			$table->increments('id');
			
			// Name of the Subject
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
		Schema::drop('subjects');
	}

}