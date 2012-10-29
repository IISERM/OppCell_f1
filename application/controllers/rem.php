<?php

class Rem_Controller extends Base_Controller
{

	public function action_index()
	{
		return Response::error('404');
	}

	public function action_prog()
	{
		$data			=	Input::json();
		$prog			=	Prog::find($data->id);
		if($prog->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_job()
	{
		$data			=	Input::json();
		$job			=	Job::find($data->id);
		if($job->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_scholar()
	{
		$data				=	Input::json();
		$scholar			=	Scholar::find($data->id);
		if($scholar->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_location()
	{
		$data					=	Input::json();
		$location				=	Location::find($data->id);
		if($location->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_subject()
	{
		$data					=	Input::json();
		$subject				=	Subject::find($data->id);
		if($subject->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_skill()
	{
		$data					=	Input::json();
		$skill					=	Skill::find($data->id);
		if($skill->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_position()
	{
		$data					=	Input::json();
		$position				=	Position::find($data->id);
		if($position->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ps()
	{
		$data	=	Input::json();
		$ps		=	Ps::find($data->id);
		if($ps->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jpos()
	{
		$data	=	Input::json();
		$jpos	=	Jpos::find($data->id);
		if($jpos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ppos()
	{
		$data	=	Input::json();
		$ppos=	Ppos::find($data->id);
		if($ppos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_spos()
	{
		$data	=	Input::json();
		$spos=	Spos::find($data->id);
		if($spos->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jsub()
	{
		$data	=	Input::json();
		$jsub=	Jsub::find($data->id);
		if($jsub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_psub()
	{
		$data	=	Input::json();
		$psub=	Psub::find($data->id);
		if($psub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_ssub()
	{
		$data	=	Input::json();
		$ssub=	Ssub::find($data->id);
		if($ssub->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_jbranch()
	{
		$data	=	Input::json();
		$jbranch=	Jbranch::find($data->id);
		if($jbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_pbranch()
	{
		$data	=	Input::json();
		$pbranch=	Pbranch::find($data->id);
		if($pbranch->delete())
		{
			return 1;
		}
		return 0;
	}

	public function action_sbranch()
	{
		$data	=	Input::json();
		$sbranch=	Sbranch::find($data->id);
		if($sbranch->delete())
		{
			return 1;
		}
		return 0;
	}
}