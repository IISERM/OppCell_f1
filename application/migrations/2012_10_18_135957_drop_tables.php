<?php

class Drop_Tables {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('jobs');
		Schema::drop('job_location');
		Schema::drop('job_skill');
		Schema::drop('locations');
		Schema::drop('location_program');
		Schema::drop('location_scholarship');
		Schema::drop('positions');
		Schema::drop('programs');
		Schema::drop('program_subject');
		Schema::drop('scholarships');
		Schema::drop('scholarship_subject');
		Schema::drop('skills');
		Schema::drop('subjects');
 	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('jobs',function($table){$table->increments('id');});
		Schema::create('job_location',function($table){$table->increments('id');});
		Schema::create('job_skill',function($table){$table->increments('id');});
		Schema::create('locations',function($table){$table->increments('id');});
		Schema::create('location_program',function($table){$table->increments('id');});
		Schema::create('location_scholarship',function($table){$table->increments('id');});
		Schema::create('positions',function($table){$table->increments('id');});
		Schema::create('programs',function($table){$table->increments('id');});
		Schema::create('program_subject',function($table){$table->increments('id');});
		Schema::create('scholarships',function($table){$table->increments('id');});
		Schema::create('scholarship_subject',function($table){$table->increments('id');});
		Schema::create('skills',function($table){$table->increments('id');});
		Schema::create('subjects',function($table){$table->increments('id');});
	}

}