<?php
	class Pbranch extends Eloquent
	{
		public static $table = 'pbranch';

		public function prog()
		{
			return $this->belongs_to('Prog','prog_id');
		}

		public function location()
		{
			return $this->belongs_to('Location','location_id');
		}

		public function subject()
		{
			return $this->has_many_and_belongs_to('Subject','psubjects');
		}

		public function subject()
		{
			return $this->has_many_and_belongs_to('Position','pposition')
						->with('opening','deadline','link');
		}
	}
