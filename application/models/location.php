<?php
	class Location extends Eloquent
	{
		public static $table = 'locations';

		public function parent()
		{
			return $this->belongs_to('Location', 'parent_id');
		}

		public function jobs()
		{
			return $this->has_many_and_belongs_to('Job', 'jbranches');
		}

		public function progs()
		{
			return $this->has_many_and_belongs_to('Prog', 'pbranches');
		}

		public function scholars()
		{
			return $this->has_many_and_belongs_to('Scholar', 'sbranches');
		}
	}