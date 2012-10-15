<?php

class Link_Programs_Skills
{

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_skill', function($table)
		{
			// ID
			$table->increments('id');
			
			// Job ID
			$table->integer('job_id');
			// Skill ID
			$table->integer('skill_id');

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
		Schema::drop('job_skill');
	}

}