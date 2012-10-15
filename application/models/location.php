<?php
	class Location extends Eloquent
	{
		public static $table = 'locations';

		public function programs()
		{
			// Programs with this location
			return $this->has_many('Program','location');
		}

		public function parent()
		{
			// Parent location of this location
			return $this->belongs_to('Location','parent');
		}

		public function children()
		{
			// Child locations of this location
			return $this->has_many('Location','parent');
		}

		public function siblings()
		{
			return $this->parent->children();
		}

	}