<?php
	class Job extends Eloquent
	{
		public static $table = 'jobs';

		public function location()
		{
			return $this->has_many_and_belongs_to('Location','jbranches')->with('link','comments');
		}
	}