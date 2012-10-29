<?php

class List_Controller extends Base_Controller
{

	public function action_index()
	{
		return Response::error('404');
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

	public function action_ps()
	{
		$ps = Ps::all();
		$data = array();
		foreach ($ps as $p)
		{
			$id = $p->id;
			$d = array(
					'position_id'	=>	$p->position_id,
					'skill_id'		=>	$p->skill_id
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_jpos()
	{
		$jpos = Jpos::all();
		$data = array();
		foreach ($jpos as $jpo)
		{
			$id = $jpo->id;
			$d = array(
					'position_id'	=>	$jpo->position_id,
					'skill_id'		=>	$jpo->skill_id
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_ppos()
	{
		$ppos = Ppos::all();
		$data = array();
		foreach ($ppos as $ppo)
		{
			$id = $ppo->id;
			$d = array(
					'position_id'	=>	$ppo->position_id,
					'skill_id'		=>	$ppo->skill_id
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_spos()
	{
		$spos = Spos::all();
		$data = array();
		foreach ($spos as $spo)
		{
			$id = $spo->id;
			$d = array(
					'position_id'	=>	$spo->position_id,
					'skill_id'		=>	$spo->skill_id
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_jsub()
	{
		$jsub = Jsub::all();
		$data = array();
		foreach ($jsub as $jsu)
		{
			$id = $jsu->id;
			$d = array(
					'jbranch_id'	=>	$jsu->jbranch_id,
					'subject_id'	=>	$jsu->subject_id
			);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_psub()
	{
		$psub = Psub::all();
		$data = array();
		foreach ($psub as $psu)
		{
			$id = $psu->id;
			$d = array(
					'pbranch_id'	=>	$psu->pbranch_id,
					'subject_id'	=>	$psu->subject_id
			);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_ssub()
	{
		$ssub = Ssub::all();
		$data = array();
		foreach ($ssub as $ssu)
		{
			$id = $ssu->id;
			$d = array(
					'sbranch_id'	=>	$ssu->sbranch_id,
					'subject_id'	=>	$ssu->subject_id
			);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_jbranch()
	{
		$jb = Jbranch::all();
		$data = array();
		foreach ($jb as $j)
		{
			$id = $j->id;
			$d = array(
					'job_id'		=>	$j->progs_id,
					'location_id'	=>	$j->locations_id,
					'link'			=>	$j->link,
					'comments'		=>	$j->comment
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_pbranch()
	{
		$pb = Pbranch::all();
		$data = array();
		foreach ($pb as $p)
		{
			$id = $p->id;
			$d = array(
					'prog_id'		=>	$p->progs_id,
					'location_id'	=>	$p->locations_id,
					'link'			=>	$p->link,
					'comments'		=>	$p->comment
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}

	public function action_sbranch()
	{
		$sb = Sbranch::all();
		$data = array();
		foreach ($sb as $s)
		{
			$id = $s->id;
			$d = array(
					'scholar_id'	=>	$s->scholars_id,
					'location_id'	=>	$s->locations_id,
					'link'			=>	$s->link,
					'comments'		=>	$s->comment
				);
			$data[$id] = $d;
		}
		return json_encode($data);
	}
}