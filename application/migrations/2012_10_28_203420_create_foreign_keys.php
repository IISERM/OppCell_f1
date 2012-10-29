<?php

class Create_Foreign_Keys {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('position_skill', function($table)
			{
				$table->foreign('position_id')->references('id')->on('positions')->on_delete('cascade');
				$table->foreign('skill_id')->references('id')->on('skills')->on_delete('cascade');
			}
		);
		Schema::table('jbranches', function($table)
			{
				$table->foreign('jobs_id')->references('id')->on('jobs')->on_delete('cascade');
				$table->foreign('locations_id')->references('id')->on('locations')->on_delete('cascade');
			}
		);
		Schema::table('pbranches', function($table)
			{
				$table->foreign('progs_id')->references('id')->on('progs')->on_delete('cascade');
				$table->foreign('locations_id')->references('id')->on('locations')->on_delete('cascade');
			}
		);
		Schema::table('sbranches', function($table)
			{
				$table->foreign('scholars_id')->references('id')->on('scholars')->on_delete('cascade');
				$table->foreign('locations_id')->references('id')->on('locations')->on_delete('cascade');
			}
		);
		Schema::table('jpositions', function($table)
			{
				$table->foreign('jbranches_id')->references('id')->on('jbranches')->on_delete('cascade');
				$table->foreign('positions_id')->references('id')->on('positions')->on_delete('cascade');
			}
		);
		Schema::table('ppositions', function($table)
			{
				$table->foreign('pbranches_id')->references('id')->on('pbranches')->on_delete('cascade');
				$table->foreign('positions_id')->references('id')->on('positions')->on_delete('cascade');
			}
		);
		Schema::table('spositions', function($table)
			{
				$table->foreign('sbranches_id')->references('id')->on('sbranches')->on_delete('cascade');
				$table->foreign('positions_id')->references('id')->on('positions')->on_delete('cascade');
			}
		);
		Schema::table('jsubjects', function($table)
			{
				$table->foreign('jbranch_id')->references('id')->on('jbranches')->on_delete('cascade');
				$table->foreign('subject_id')->references('id')->on('subjects')->on_delete('cascade');
			}
		);
		Schema::table('psubjects', function($table)
			{
				$table->foreign('pbranch_id')->references('id')->on('pbranches')->on_delete('cascade');
				$table->foreign('subject_id')->references('id')->on('subjects')->on_delete('cascade');
			}
		);
		Schema::table('ssubjects', function($table)
			{
				$table->foreign('sbranch_id')->references('id')->on('sbranches')->on_delete('cascade');
				$table->foreign('subject_id')->references('id')->on('subjects')->on_delete('cascade');
			}
		);
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('position_skill', function($table)
			{
				$table->drop_foreign('position_skill_position_id_foreign');
				$table->drop_foreign('position_skill_skill_id_foreign');
			}
		);
		Schema::table('jbranches', function($table)
			{
				$table->drop_foreign('jbranches_jobs_id_foreign');
				$table->drop_foreign('jbranches_locations_id_foreign');
			}
		);
		Schema::table('pbranches', function($table)
			{
				$table->drop_foreign('pbranches_progs_id_foreign');
				$table->drop_foreign('pbranches_locations_id_foreign');
			}
		);
		Schema::table('sbranches', function($table)
			{
				$table->drop_foreign('sbranches_scholars_id_foreign');
				$table->drop_foreign('sbranches_locations_id_foreign');
			}
		);
		Schema::table('jpositions', function($table)
			{
				$table->drop_foreign('jpositions_jbranches_id_foreign');
				$table->drop_foreign('jpositions_positions_id_foreign');
			}
		);
		Schema::table('ppositions', function($table)
			{
				$table->drop_foreign('ppositions_pbranches_id_foreign');
				$table->drop_foreign('ppositions_positions_id_foreign');
			}
		);
		Schema::table('spositions', function($table)
			{
				$table->drop_foreign('spositions_sbranches_id_foreign');
				$table->drop_foreign('spositions_positions_id_foreign');
			}
		);
		Schema::table('jsubjects', function($table)
			{
				$table->drop_foreign('jsubjects_jbranch_id_foreign');
				$table->drop_foreign('jsubjects_subject_id_foreign');
			}
		);
		Schema::table('psubjects', function($table)
			{
				$table->drop_foreign('psubjects_pbranch_id_foreign');
				$table->drop_foreign('psubjects_subject_id_foreign');
			}
		);
		Schema::table('ssubjects', function($table)
			{
				$table->drop_foreign('ssubjects_sbranch_id_foreign');
				$table->drop_foreign('ssubjects_subject_id_foreign');
			}
		);
	}

}