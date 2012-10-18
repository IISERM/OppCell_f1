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
		Schema::create('jobs',function(){});
		Schema::create('job_location',function(){});
		Schema::create('job_skill',function(){});
		Schema::create('locations',function(){});
		Schema::create('location_program',function(){});
		Schema::create('location_scholarship',function(){});
		Schema::create('positions',function(){});
		Schema::create('programs',function(){});
		Schema::create('program_subject',function(){});
		Schema::create('scholarships',function(){});
		Schema::create('sholarship_subject',function(){});
		Schema::create('skills',function(){});
		Schema::create('subjects',function(){});
	}

}