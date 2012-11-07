<?php
	
	class Add_Progs_Task
	{

		public function seed()
		{
			$this->progs();
			$this->jobs();
			$this->scholars();
			$this->locations();
			$this->subjects();
			$this->positions();
			$this->skills();
		}

		public function progs()
		{
			DB::query('TRUNCATE TABLE progs');
			$prog = Prog::create(
					array(
						'name'		=> 'Some Insti 1',
						'link'		=> 'Links for 1',
					)
				);
			$prog = Prog::create(
					array(
						'name'		=> 'Some Insti 2',
						'link'		=> 'Links for 2',
					)
				);
			$prog = Prog::create(
					array(
						'name'		=> 'Some Insti 3',
						'link'		=> 'Links for 3',
					)
				);
		}

		public function jobs()
		{
			DB::query('TRUNCATE TABLE jobs');
			$job = Job::create(
					array(
						'name'		=> 'Some Job 1',
						'link'		=> 'Links for Job 1',
					)
				);
			$job = Job::create(
					array(
						'name'		=> 'Some Job 2',
						'link'		=> 'Links for Job 2',
					)
				);
			$job = Job::create(
					array(
						'name'		=> 'Some Job 3',
						'link'		=> 'Links for Job 3',
					)
				);
		}

		public function scholars()
		{
			DB::query('TRUNCATE TABLE scholars');
			$scholar = Scholar::create(
					array(
						'name'		=> 'Some scholar 1',
						'link'		=> 'Links for scholar 1',
					)
				);
			$scholar = Scholar::create(
					array(
						'name'		=> 'Some scholar 2',
						'link'		=> 'Links for scholar 2',
					)
				);
			$scholar = Scholar::create(
					array(
						'name'		=> 'Some scholar 3',
						'link'		=> 'Links for scholar 3',
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
						'parent_id'	=> 1
					)
				);
			Location::create(
					array(
						'name'		=> 'Berkeley',
						'parent_id'	=> 1
					)
				);
			Location::create(
					array(
						'name'		=> 'Hannover',
						'parent_id'	=> 3
					)
				);
			Location::create(
					array(
						'name'		=> 'Pune',
						'parent_id'	=> 2
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
						'name'		=> 'Biology',
					)
				);
			Subject::create(
					array(
						'name'		=> 'Chemistry',
					)
				);
			Subject::create(
					array(
						'name'		=> 'Quantum Mechanics',
						'parent_id'	=> 1
					)
				);
			Subject::create(
					array(
						'name'		=> 'Astrophysics',
						'parent_id'	=> 1
					)
				);
			Subject::create(
					array(
						'name'		=> 'Immunobiology',
						'parent_id'	=> 3
					)
				);
			Subject::create(
					array(
						'name'		=> 'Algebra',
						'parent_id'	=> 2
					)
				);
		}

		public function positions()
		{
			DB::query('TRUNCATE TABLE positions');
			Position::create(
					array(
						'name'		=> 'Summer Project (2 months)',
					)
				);
			Position::create(
					array(
						'name'		=> 'Summer Project (4 months)',
					)
				);
			Position::create(
					array(
						'name'		=> 'PhD (3 yr)',
					)
				);
		}

		public function skills()
		{
			DB::query('TRUNCATE TABLE skills');
			$s = Skill::create(
					array(
						'name'		=> 'Skill 1',
					)
				);
			$s->positions()->sync(array(1));
			$s = Skill::create(
					array(
						'name'		=> 'Skill 2',
					)
				);
			$s->positions()->sync(array(2,3));
			$s = Skill::create(
					array(
						'name'		=> 'Skill 3',
					)
				);
			$s->positions()->sync(array(1,3));
		}

		public function seed2()
		{
			$this->progs2();
			$this->jobs2();
			$this->scholars2();
			$this->locations2();
			$this->subjects2();
			$this->positions2();
			$this->skills2();
		}

		public function progs2()
		{
			$prog = Prog::create(
					array(
						'name'		=> 'Some Insti 1',
						'link'		=> 'Links for 1',
					)
				);
			$prog = Prog::create(
					array(
						'name'		=> 'Some Insti 2',
						'link'		=> 'Links for 2',
					)
				);
			$prog = Prog::create(
					array(
						'name'		=> 'Some Insti 3',
						'link'		=> 'Links for 3',
					)
				);
		}

		public function jobs2()
		{
			$job = Job::create(
					array(
						'name'		=> 'Some Job 1',
						'link'		=> 'Links for Job 1',
					)
				);
			$job = Job::create(
					array(
						'name'		=> 'Some Job 2',
						'link'		=> 'Links for Job 2',
					)
				);
			$job = Job::create(
					array(
						'name'		=> 'Some Job 3',
						'link'		=> 'Links for Job 3',
					)
				);
		}

		public function scholars2()
		{
			$scholar = Scholar::create(
					array(
						'name'		=> 'Some scholar 1',
						'link'		=> 'Links for scholar 1',
					)
				);
			$scholar = Scholar::create(
					array(
						'name'		=> 'Some scholar 2',
						'link'		=> 'Links for scholar 2',
					)
				);
			$scholar = Scholar::create(
					array(
						'name'		=> 'Some scholar 3',
						'link'		=> 'Links for scholar 3',
					)
				);
		}

		public function locations2()
		{
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
						'parent_id'	=> 1
					)
				);
			Location::create(
					array(
						'name'		=> 'Berkeley',
						'parent_id'	=> 1
					)
				);
			Location::create(
					array(
						'name'		=> 'Hannover',
						'parent_id'	=> 3
					)
				);
			Location::create(
					array(
						'name'		=> 'Pune',
						'parent_id'	=> 2
					)
				);
		}

		public function subjects2()
		{
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
						'parent_id'	=> 1
					)
				);
			Subject::create(
					array(
						'name'		=> 'Astrophysics',
						'parent_id'	=> 1
					)
				);
			Subject::create(
					array(
						'name'		=> 'Immunobiology',
						'parent_id'	=> 4
					)
				);
			Subject::create(
					array(
						'name'		=> 'Algebra',
						'parent_id'	=> 2
					)
				);
		}

		public function positions2()
		{
			Position::create(
					array(
						'name'		=> 'Summer Project (2 months)',
					)
				);
			Position::create(
					array(
						'name'		=> 'Summer Project (4 months)',
					)
				);
			Position::create(
					array(
						'name'		=> 'PhD (3 yr)',
					)
				);
		}

		public function skills2()
		{
			$s = Skill::create(
					array(
						'name'		=> 'Skill 1',
					)
				);
			$s->positions()->sync(array(1));
			$s = Skill::create(
					array(
						'name'		=> 'Skill 2',
					)
				);
			$s->positions()->sync(array(2,3));
			$s = Skill::create(
					array(
						'name'		=> 'Skill 3',
					)
				);
			$s->positions()->sync(array(1,3));
		}

	}