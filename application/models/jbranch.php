<?php
	class Jbranch extends Eloquent
	{
		public static $table = 'jbranch';

		public function job()
		{
			return $this->belongs_to('Job','job_id');
		}

		public function location()
		{
			return $this->belongs_to('Location','location_id');
		}

		public function subject()
		{
			return $this->has_many_and_belongs_to('Subject','jsubjects');
		}

		public function subject()
		{
			return $this->has_many_and_belongs_to('Position','jposition')
						->with('opening','deadline','link');
		}
	}
