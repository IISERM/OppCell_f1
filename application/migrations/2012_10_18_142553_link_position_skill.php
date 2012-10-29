<?php

class Link_Position_Skill {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('position_skill', function($table)
		{
			// ID
			$table->increments('id');

			// Linking Fields
				// Position
				$table->integer('position_id')->unsigned();
				// Skill
				$table->integer('skill_id')->unsigned();

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
		Schema::drop('position_skill');
	}

}