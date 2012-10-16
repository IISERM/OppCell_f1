<?php

	class Database_Controller extends Base_Controller
	{
	
		public function action_index()
		{
			return $this->action_progs();
		}
	
		public function action_progs()
		{
			$d = array();
			$data = array();
			$progs = Program::with(array('location','subjects','positions'))->all();
			foreach ($progs as $prog)
			{
				$s = "";
				foreach ($prog->subjects as $subject)
				{
					$s = $s.$subject->name.", ";
					if($subject->parent != 0)
					{
						$s = $s.Subject::find($subject->parent)->name.", ";
					}
				}
				$p = "";
				foreach ($prog->positions as $position)
				{
					$p = $p.$position->name.", ";
				}
				$l = $prog->location;
				$l2 = Location::find($l);
				$l = $l2->name;
				while($l2->parent != 0)
				{
					$l2 = Location::find($l2->parent);
					$l = $l.", ".$l2->name;
				}
				$s = substr($s,0,-2);
				$p = substr($p,0,-2);
				$data = array(
						'id' 		=> $prog->id,
						'name' 		=> $prog->name,
						'link'		=> $prog->link,
						'location'	=> $l,
						'subject'	=> $s,
						'position'	=> $p,
						'deadline'	=> $prog->deadline,
						'opening'	=> $prog->opening
					);
				$d[] = $data;
			}
			return View::make('database.progs')->with(array('data' => $d));
		}
	
		public function action_jobs()
		{
			$d = array();
			$data = array();
			$jobs = Job::with(array('location','skills'))->all();
			foreach ($jobs as $job)
			{
				$s = "";
				foreach ($job->skills as $skill)
				{
					$s = $s.$skill->name.", ";
					if($skill->parent != 0)
					{
						$s = $s.Skill::find($skill->parent)->name.", ";
					}
				}
				$l = $job->location;
				$l2 = Location::find($l);
				$l = $l2->name;
				while($l2->parent != 0)
				{
					$l2 = Location::find($l2->parent);
					$l = $l.", ".$l2->name;
				}
				$s = substr($s,0,-2);
				$data = array(
						'id' 		=> $job->id,
						'name' 		=> $job->name,
						'link'		=> $job->link,
						'location'	=> $l,
						'skill'		=> $s,
						'deadline'	=> $job->deadline,
						'opening'	=> $job->opening
					);
				$d[] = $data;
			}
			return View::make('database.jobs')->with(array('data' => $d));
		}
	
		public function action_scholarships()
		{
			$d = array();
			$data = array();
			$progs = Program::with(array('location','subjects'))->all();
			foreach ($progs as $prog)
			{
				$s = "";
				foreach ($prog->subjects as $subject)
				{
					$s = $s.$subject->name.", ";
					if($subject->parent != 0)
					{
						$s = $s.Subject::find($subject->parent)->name.", ";
					}
				}
				$l = $prog->location;
				$l2 = Location::find($l);
				$l = $l2->name;
				while($l2->parent != 0)
				{
					$l2 = Location::find($l2->parent);
					$l = $l.", ".$l2->name;
				}
				$s = substr($s,0,-2);
				$data = array(
						'id' 		=> $prog->id,
						'name' 		=> $prog->name,
						'link'		=> $prog->link,
						'location'	=> $l,
						'subject'	=> $s,
						'deadline'	=> $prog->deadline,
						'opening'	=> $prog->opening
					);
				$d[] = $data;
			}
			return View::make('database.scholarships')->with(array('data' => $d));
		}
	}