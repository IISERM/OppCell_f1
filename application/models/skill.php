<?php
	class Skill extends Eloquent
	{
		public static $table = 'skills';

		public function parent()
		{
			return $this->belongs_to('Skill', 'parent_id');
		}

		public function positions()
		{
			return $this->has_many_and_belongs_to('Position','position_skill');
		}
	}