<?php
	class Skill extends Eloquent
	{
		public static $table = 'skills';

		public function programs()
		{
			// Programs with this skill
			return $this->has_many_and_belongs_to('Program','program_skill');
		}

		public function parent()
		{
			// Parent skill of this skill
			return $this->belongs_to('skill','parent');
		}

		public function children()
		{
			// Child skills of this skill
			return $this->has_many('skill','parent');
		}

		public function siblings()
		{
			return $this->parent->children();
		}

	}