<?php
	class Program extends Eloquent
	{
		public static $table = 'programs';

		public function location()
		{
			// Location of the program
			return $this->belongs_to('Location','location');
		}

		public function subjects()
		{
			// Subjects of the program
			return $this->has_many_and_belongs_to('Subject','program_subject');
		}

		public function positions()
		{
			// Positions in the program
			return $this->has_many_and_belongs_to('Position','position_program');
		}

	}