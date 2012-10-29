<?php

class Rem_Controller extends Base_Controller
{

	public function action_index()
	{
		return Response::error('404');
	}

	public function action_prog()
	{
		$prog			=	Prog::find(Input::get('id'));
		if($prog->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_job()
	{
		$job			=	Job::find(Input::get('id'));
		if($job->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_scholar()
	{
		$scholar			=	Scholar::find(Input::get('id'));
		if($scholar->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_location()
	{
		$location				=	Location::find(Input::get('id'));
		if($location->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_subject()
	{
		$subject				=	Subject::find(Input::get('id'));
		if($subject->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_skill()
	{
		$skill					=	Skill::find(Input::get('id'));
		if($skill->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_position()
	{
		$position				=	Position::find(Input::get('id'));
		if($position->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ps()
	{
		$ps		=	Ps::find(Input::get('id'));
		if($ps->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jpos()
	{
		$jpos	=	Jpos::find(Input::get('id'));
		if($jpos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ppos()
	{
		$ppos=	Ppos::find(Input::get('id'));
		if($ppos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_spos()
	{
		$spos=	Spos::find(Input::get('id'));
		if($spos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jsub()
	{
		$jsub=	Jsub::find(Input::get('id'));
		if($jsub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_psub()
	{
		$psub	=	Psub::find(Input::get('id'));
		if($psub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ssub()
	{
		$ssub=	Ssub::find(Input::get('id'));
		if($ssub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jbranch()
	{
		$jbranch=	Jbranch::find(Input::get('id'));
		if($jbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_pbranch()
	{
		$pbranch=	Pbranch::find(Input::get('id'));
		if($pbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_sbranch()
	{
		$sbranch=	Sbranch::find(Input::get('id'));
		if($sbranch->delete())
		{
			return 1;
		}
		return 0;
	}
}