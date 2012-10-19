<?php
	class Subject extends Eloquent
	{
		public static $table = 'subjects';

		public function parent()
		{
			$this->belongs_to('Subject','parent_id');
		}

		public function jobs()
		{
			return $this->has_many_and_belongs_to('Jbranch', 'jsubjects');
		}

		public function progs()
		{
			return $this->has_many_and_belongs_to('Pbranch', 'psubjects');
		}

		public function scholars()
		{
			return $this->has_many_and_belongs_to('Sbranch', 'ssubjects');
		}
	}