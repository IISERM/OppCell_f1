<?php

class Remove_Subject_From_Programs
{

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('programs', function($table)
			{
				// Removing the Subject Column from pograms
				$table->drop_column('subject');
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
		Schema::table('programs', function($table)
			{
				// Adding the Subject Column to pograms
				$table->integer('subject');
			}
		);
	}

}