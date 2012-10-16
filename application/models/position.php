<?php
	class Position extends Eloquent
	{
		public static $table = 'positions';

		public function programs()
		{
			// Positions in the program
			return $this->has_many_and_belongs_to('Programs','position_program');
		}

	}