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
			return $this->has_many_and_belongs_to('Subject','ssubjects');
		}

		public function position()
		{
			return $this->has_many_and_belongs_to('Position','sposition')
						->with('opening','deadline','link');
		}
	}
