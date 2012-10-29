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
		$prog	=	Prog::find($id->id);
		if($prog->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_job()
	{
		$id 	=	Input::json();
		$job	=	Job::find($id->id);
		if($job->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_scholar()
	{
		$id 	=	Input::json();
		$scholar=	Scholar::find($id->id);
		if($scholar->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_location()
	{
		$id 	=	Input::json();
		$location				=	Location::find($id->id);
		if($location->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_subject()
	{
		$id 	=	Input::json();
		$subject				=	Subject::find($id->id);
		if($subject->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_skill()
	{
		$id 	=	Input::json();
		$skill					=	Skill::find($id->id);
		if($skill->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_position()
	{
		$id 	=	Input::json();
		$position				=	Position::find($id->id);
		if($position->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ps()
	{
		$id 	=	Input::json();
		$ps		=	Ps::find($id->id);
		if($ps->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jpos()
	{
		$id 	=	Input::json();
		$jpos	=	Jpos::find($id->id);
		if($jpos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ppos()
	{
		$id 	=	Input::json();
		$ppos	=	Ppos::find($id->id);
		if($ppos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_spos()
	{
		$id 	=	Input::json();
		$spos=	Spos::find($id->id);
		if($spos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jsub()
	{
		$id 	=	Input::json();
		$jsub=	Jsub::find($id->id);
		if($jsub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_psub()
	{
		$id 	=	Input::json();
		$psub	=	Psub::find($id->id);
		if($psub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ssub()
	{
		$id 	=	Input::json();
		$ssub=	Ssub::find($id->id);
		return json_encode($ssub);
		if($ssub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jbranch()
	{
		$id 	=	Input::json();
		$jbranch=	Jbranch::find($id->id);
		if($jbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_pbranch()
	{
		$id 	=	Input::json();
		$pbranch=	Pbranch::find($id->id);
		if($pbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_sbranch()
	{
		$id 	=	Input::json();
		$sbranch=	Sbranch::find($id->id);
		if($sbranch->delete())
		{
			return 1;
		}
		return 0;
	}
}