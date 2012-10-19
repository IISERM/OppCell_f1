<?php
	class Sbranch extends Eloquent
	{
		public static $table = 'sbranches';

		public function scholar()
		{
			return $this->belongs_to('Scholar','scholar_id');
		}

		public function location()
		{
			return $this->belongs_to('Location','location_id');
		}

		public function subject()
		{
			return $this->has_many_and_belongs_to('Subject','psubjects');
		}

		public function position()
		{
			return $this->has_many_and_belongs_to('Position','pposition')
						->with('opening','deadline','link');
		}
	}
