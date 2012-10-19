<?php
	class Prog extends Eloquent
	{
		public static $table = 'progs';

		public function location()
		{
			return $this->has_many_and_belongs_to('Location','pbranches')->with('link','comments');
		}
	}