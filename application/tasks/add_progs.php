<?php
	
	class Add_Progs_Task
	{

		public function seed()
		{
			$this->subjects();
			$this->locations();
			$this->positions();
			$this->programs();
		}

		public function programs()
		{
			DB::query('TRUNCATE TABLE programs');
			$prog = Program::create(
					array(
						'name'		=> 'Some Insti 1',
						'link'		=> 'Links for 1',
						'location'	=> 1,
						'deadline'	=> '2012-10-21 08:00:00',
						'opening'	=> '2012-10-11 08:00:00'
					)
				);
			$prog->subjects()->sync(array(1, 2, 3));
			$prog = Program::create(
					array(
						'name'		=> 'Some Insti 2',
						'link'		=> 'Links for 2',
						'location'	=> 5,
						'deadline'	=> '2012-10-21 08:00:00',
						'opening'	=> '2012-10-11 08:00:00'
					)
				);
			$prog->subjects()->sync(array(1, 4));
			$prog = Program::create(
					array(
						'name'		=> 'Some Insti 3',
						'link'		=> 'Links for 3',
						'location'	=> 4,
						'deadline'	=> '2012-10-21 08:00:00',
						'opening'	=> '2012-10-11 08:00:00'
					)
				);
			$prog->subjects()->sync(array(5));
		}

		public function positions()
		{
			DB::query('TRUNCATE TABLE positions');
			Position::create(
					array(
						'name'		=> '2 Month Summer Project',
						'duration'	=> 2.00
					)
				);
			Position::create(
					array(
						'name'		=> '4 Month Summer Project',
						'duration'	=> 4.00
					)
				);
			Position::create(
					array(
						'name'		=> '3 yr PhD',
						'duration'	=> 36.00
					)
				);
		}

		public function locations()
		{
			DB::query('TRUNCATE TABLE locations');
			Location::create(
					array(
						'name'		=> 'USA',
					)
				);
			Location::create(
					array(
						'name'		=> 'India',
					)
				);
			Location::create(
					array(
						'name'		=> 'Germany',
					)
				);
			Location::create(
					array(
						'name'		=> 'Texas',
						'parent'	=> 1
					)
				);
			Location::create(
					array(
						'name'		=> 'Berkeley',
						'parent'	=> 1
					)
				);
			Location::create(
					array(
						'name'		=> 'Hannover',
						'parent'	=> 3
					)
				);
			Location::create(
					array(
						'name'		=> 'Pune',
						'parent'	=> 2
					)
				);
		}

		public function subjects()
		{
			DB::query('TRUNCATE TABLE subjects');
			Subject::create(
					array(
						'name'		=> 'Physics',
					)
				);
			Subject::create(
					array(
						'name'		=> 'Mathematics',
					)
				);
			Subject::create(
					array(
						'name'		=> 'Chemistry',
					)
				);
			Subject::create(
					array(
						'name'		=> 'Biology',
					)
				);
			Subject::create(
					array(
						'name'		=> 'Quantum Mechanics',
						'parent'	=> 1
					)
				);
			Subject::create(
					array(
						'name'		=> 'Astrophysics',
						'parent'	=> 1
					)
				);
			Subject::create(
					array(
						'name'		=> 'Immunobiology',
						'parent'	=> 4
					)
				);
			Subject::create(
					array(
						'name'		=> 'Algebra',
						'parent'	=> 2
					)
				);
		}

	}