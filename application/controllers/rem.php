<?php

class Rem_Controller extends Base_Controller
{

	public function action_index()
	{
		return Response::error('404');
	}

	public function action_prog()
	{
		$id 	=	Input::json();
		$prog					=	Prog::find($id);
		if($prog->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_job()
	{
		$id 	=	Input::json();
		$job					=	Job::find($id);
		if($job->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_scholar()
	{
		$id 	=	Input::json();
		$scholar				=	Scholar::find($id);
		if($scholar->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_location()
	{
		$id 	=	Input::json();
		$location				=	Location::find($id);
		if($location->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_subject()
	{
		$id 	=	Input::json();
		$subject				=	Subject::find($id);
		if($subject->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_skill()
	{
		$id 	=	Input::json();
		$skill					=	Skill::find($id);
		if($skill->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_position()
	{
		$id 	=	Input::json();
		$position				=	Position::find($id);
		if($position->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ps()
	{
		$id 	=	Input::json();
		$ps		=	Ps::find($id);
		if($ps->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jpos()
	{
		$id 	=	Input::json();
		$jpos	=	Jpos::find($id);
		if($jpos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ppos()
	{
		$id 	=	Input::json();
		$ppos=	Ppos::find($id);
		if($ppos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_spos()
	{
		$id 	=	Input::json();
		$spos=	Spos::find($id);
		if($spos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jsub()
	{
		$id 	=	Input::json();
		$jsub=	Jsub::find($id);
		if($jsub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_psub()
	{
		$id 	=	Input::json();
		$psub	=	Psub::find($id);
		if($psub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ssub()
	{
		$id 	=	Input::json();
		$ssub=	Ssub::find($id);
		if($ssub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jbranch()
	{
		$id 	=	Input::json();
		$jbranch=	Jbranch::find($id);
		if($jbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_pbranch()
	{
		$id 	=	Input::json();
		$pbranch=	Pbranch::find($id);
		if($pbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_sbranch()
	{
		$id 	=	Input::json();
		$sbranch=	Sbranch::find($id);
		if($sbranch->delete())
		{
			return 1;
		}
		return 0;
	}
}