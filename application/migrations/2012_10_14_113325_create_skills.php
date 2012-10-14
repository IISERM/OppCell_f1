<?php

class Create_Skills {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function($table)
		{
			// ID
			$table->increments('id');
			
			// Name of the Skill
			$table->string('skill');
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
		Schema::drop('skills');
	}

}