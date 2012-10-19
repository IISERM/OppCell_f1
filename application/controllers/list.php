<?php

class List_Controller extends Base_Controller {

	public function action_index()
	{
	}

	public function action_prog()
	{
		$progs = Prog::all();
		$data = array();
		foreach ($progs as $prog)
		{
			$id = $prog->id;
			$d = array(
					'name' 		=>	$prog->name,
					'link'		=>	$prog->link,
					'comments'	=>	$prog->comments
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_job()
	{
		$jobs = Job::all();
		$data = array();
		foreach ($jobs as $job)
		{
			$id = $job->id;
			$d = array(
					'name' 		=>	$job->name,
					'link'		=>	$job->link,
					'comments'	=>	$job->comments
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_scholar()
	{
		$scholars = Scholar::all();
		$data = array();
		foreach ($scholars as $scholar)
		{
			$id = $scholar->id;
			$d = array(
					'name' 		=>	$scholar->name,
					'link'		=>	$scholar->link,
					'comments'	=>	$scholar->comments
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_location()
	{
		$locations = Location::all();
		$data = array();
		foreach ($locations as $location)
		{
			$id = $location->id;
			$d = array(
					'name' 		=>	$location->name,
					'link'		=>	$location->link,
					'parent_id'	=>	$location->parent_id,
					'comments'	=>	$location->comments
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_subject()
	{
		$subjects = Subject::all();
		$data = array();
		foreach ($subjects as $subject)
		{
			$id = $subject->id;
			$d = array(
					'name' 		=>	$subject->name,
					'link'		=>	$subject->link,
					'parent_id'	=>	$subject->parent_id,
					'comments'	=>	$subject->comments
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_skill()
	{
		$skills = Skill::all();
		$data = array();
		foreach ($skills as $skill)
		{
			$id = $skill->id;
			$d = array(
					'name' 		=>	$skill->name,
					'link'		=>	$skill->link,
					'parent_id'	=>	$skill->parent_id,
					'comments'	=>	$skill->comments
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_position()
	{
		$positions = Position::all();
		$data = array();
		foreach ($positions as $position)
		{
			$id = $position->id;
			$d = array(
					'name' 		=>	$position->name,
					'link'		=>	$position->link,
					'parent_id'	=>	$position->parent_id,
					'comments'	=>	$position->comments
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}
}