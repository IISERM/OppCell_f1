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
		else
		{
			return 0;
		}
	}

	public function action_job()
	{
		$data			=	Input::json();
		$job			=	Job::find($data->id);
		if($job->delete())
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_scholar()
	{
		$data				=	Input::json();
		$scholar			=	Scholar::find($data->id);
		if($scholar->delete())
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_location()
	{
		$data					=	Input::json();
		$location				=	Location::find($data->id);
		if($location->delete())
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_subject()
	{
		$data					=	Input::json();
		$subject				=	Subject::find($data->id);
		if($subject->delete())
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_skill()
	{
		$data					=	Input::json();
		$skill					=	Skill::find($data->id);
		if($skill->delete())
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_position()
	{
		$data					=	Input::json();
		$position				=	Position::find($data->id);
		if($position->delete())
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_ps()
	{
		// $data	=	Input::json();
		// $pos = Position::find($data->position_id);
		// if($pos->skills()->sync($data->skill_id))
		// {
		// 	return 1;
		// }
		// else
		// {
			return 0;
		// }
	}

	public function action_jpos()
	{
		$data	=	Input::json();
		if(Jbranch::json()->where('job_id','=',$data->job_id)->where('position_id','=',$data->position_id))
		{
			if($jb->delete())
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		return 0;
	}

	public function action_ppos()
	{
		$data	=	Input::json();
		$prog	=	Prog::find($data->prog_id);
		$position =	Position::find($data->position_id);
		if(Pbranch::json()->where('prog_id','=',$prog)->where('position_id','=',$position))
		{
			if($pb->delete())
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		return 0;
	}

	public function action_spos()
	{
		$data	=	Input::json();
		$scholar	=	Scholar::find($data->scholar_id);
		$position =	Position::find($data->position_id);
		if(Sbranch::json()->where('scholar_id','=',$scholar)->where('position_id','=',$position))
		{
			if($sb->delete())
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		return 0;
	}

	public function action_jsub()
	{
		$data	=	Input::json();
		$job	=	Job::find($data->job_id);
		$subject = $data->subject_id;
		if($subject)
		{
			$job->sync($subject);
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_psub()
	{
		$data	=	Input::json();
		$prog	=	Prog::find($data->prog_id);
		$subject = $data->subject_id;
		if($subject)
		{
			$prog->sync($subject);
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_ssub()
	{
		$data	=	Input::json();
		$scholar	=	Scholar::find($data->scholar_id);
		$subject = $data->subject_id;
		if($subject)
		{
			$scholar->sync($subject);
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function action_jbranch()
	{
		$data	=	Input::json();
		$job	=	Job::find($data->job_id);
		$location =	Location::find($data->location_id);
		if(Jbranch::json()->where('job_id','=',$job)->where('location_id','=',$location))
		{
			return 0;
		}
		else
		{
			$jb =	Jbranch::create(array(
						'job_id'		=>	$job,
						'location_id'	=>	$location,
						'link'			=>	$data->link,
						'comments'		=>	$data->comments
					));
			if($jb)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

	public function action_pbranch()
	{
		$data	=	Input::json();
		$prog	=	Prog::find($data->prog_id);
		$location =	Location::find($data->location_id);
		if(Jbranch::json()->where('prog_id','=',$prog)->where('location_id','=',$location))
		{
			return 0;
		}
		else
		{
			$pb =	Pbranch::create(array(
						'prog_id'		=>	$prog,
						'location_id'	=>	$location,
						'link'			=>	$data->link,
						'comments'		=>	$data->comments
					));
			if($pb)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

	public function action_sbranch()
	{
		$data	=	Input::json();
		$scholar	=	Scholar::find($data->scholar_id);
		$location =	Location::find($data->location_id);
		if(Jbranch::json()->where('scholar_id','=',$scholar)->where('location_id','=',$location))
		{
			return 0;
		}
		else
		{
			$sb =	Sbranch::create(array(
						'scholar_id'	=>	$scholar,
						'location_id'	=>	$location,
						'link'			=>	$data->link,
						'comments'		=>	$data->comments
					));
			if($sb)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}
}