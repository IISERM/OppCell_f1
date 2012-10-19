<?php
	class Position extends Eloquent
	{
		public static $table = 'positions';

		public function parent()
		{
			return $this->belongs_to('Position', 'parent_id');
		}

		public function skills()
		{
			return $this->has_many_and_belongs_to('Skill','position_skill');
		}

		public function jobs()
		{
			return $this->has_many_and_belongs_to('Jbranch', 'jpositions');
		}

		public function progs()
		{
			return $this->has_many_and_belongs_to('Pbranch', 'ppositions');
		}

		public function scholars()
		{
			return $this->has_many_and_belongs_to('Sbranch', 'spositions');
		}
	}