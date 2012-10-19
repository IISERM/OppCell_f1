<?php
	class Scholar extends Eloquent
	{
		public static $table = 'scholars';

		public function location()
		{
			return $this->has_many_and_belongs_to('Location','sbranches')->with('link','comments');
		}
	}