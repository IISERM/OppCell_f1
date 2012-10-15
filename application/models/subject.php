<?php
	class Subject extends Eloquent
	{
		public static $table = 'subjects';

		public function programs()
		{
			// Programs with this subject
			return $this->has_many_and_belongs_to('Program','program_subject');
		}

		public function parent()
		{
			// Parent subject of this subject
			return $this->belongs_to('Subject','parent');
		}

		public function children()
		{
			// Child subjects of this subject
			return $this->has_many('Subject','parent');
		}

		public function siblings()
		{
			return $this->parent->children();
		}

	}