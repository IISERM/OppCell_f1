<?php

class Update_Controller extends Base_Controller
{

	public function action_index()
	{
		return Response::error('404');
	}

	public function action_prog()
	{
		$data			=	Input::json();
		$prog			=	Prog::find($data->id);
		$prog->name		=	$data->name;
		$prog->link		=	$data->link;
		$prog->comments	=	$data->comments;
		if($prog->save())
		{
			return 1;
		}
		return 0;
	}

	public function action_job()
	{
		$data			=	Input::json();
		$job			=	Job::find($data->id);
		$job->name		=	$data->name;
		$job->link		=	$data->link;
		$job->comments	=	$data->comments;
		if($job->save())
		{
			return 1;
		}
		return 0;
	}

	public function action_scholar()
	{
		$data				=	Input::json();
		$scholar			=	Scholar::find($data->id);
		$scholar->name		=	$data->name;
		$scholar->link		=	$data->link;
		$scholar->comments	=	$data->comments;
		if($scholar->save())
		{
			return 1;
		}
		return 0;
	}

	public function action_location()
	{
		$data					=	Input::json();
		$location				=	Location::find($data->id);
		$location->name			=	$data->name;
		$location->parent_id	=	$data->parent_id;
		$location->comments		=	$data->comments;
		if($location->save())
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
		$subject->name			=	$data->name;
		$subject->parent_id		=	$data->parent_id;
		$subject->comments		=	$data->comments;
		if($subject->save())
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
		$skill->name			=	$data->name;
		$skill->parent_id		=	$data->parent_id;
		$skill->comments		=	$data->comments;
		if($skill->save())
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
		$position->name			=	$data->name;
		$position->parent_id	=	$data->parent_id;
		$position->comments		=	$data->comments;
		if($position->save())
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
			return 0;
		}
		else
		{
			$jb =	Jbranch::create(array(
						'job_id'		=>	$data->job_id,
						'position_id'	=>	$data->position_id,
						'deadline'		=>	$data->deadline,
						'opening'		=>	$data->opening,
						'link'			=>	$data->link
					));
			if($jb->save())
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

	public function action_ppos()
	{
		$data	=	Input::json();
		if(Pbranch::json()->where('prog_id','=',$data->prog_id)->where('position_id','=',$data->position_id))
		{
			return 0;
		}
		else
		{
			$pb =	Pbranch::create(array(
						'prog_id'		=>	$data->prog_id,
						'position_id'	=>	$data->position_id,
						'deadline'		=>	$data->deadline,
						'opening'		=>	$data->opening,
						'link'			=>	$data->link
					));
			if($pb->save())
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

	public function action_spos()
	{
		$data	=	Input::json();
		$scholar	=	Scholar::find($);
		$position =	Position::find($);
		if(Sbranch::json()->where('scholar_id','=',$data->scholar_id)->where('position_id','=',$data->position_id))
		{
			return 0;
		}
		else
		{
			$sb =	Sbranch::create(array(
						'scholar_id'	=>	$data->scholar_id,
						'position_id'	=>	$data->position_id,
						'deadline'		=>	$data->deadline,
						'opening'		=>	$data->opening,
						'link'			=>	$data->link
					));
			if($sb->save())
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

	public function action_jsub()
	{
		$data	=	Input::json();
		$job	=	Job::find($data->job_id);
		$subject = $data->subject_id;
		if($subject->save())
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
		if($subject->save())
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
		if($subject->save())
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
		if(Jbranch::json()->where('job_id','=',$data->job_id)->where('location_id','=',$data->location_id))
		{
			return 0;
		}
		else
		{
			$jb =	Jbranch::create(array(
						'job_id'		=>	$data->job_id,
						'location_id'	=>	$data->location_id,
						'link'			=>	$data->link,
						'comments'		=>	$data->comments
					));
			if($jb->save())
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
		if(Jbranch::json()->where('prog_id','=',$data->prog_id)->where('location_id','=',$data->location_id))
		{
			return 0;
		}
		else
		{
			$pb =	Pbranch::create(array(
						'prog_id'		=>	$data->prog_id,
						'location_id'	=>	$data->location_id,
						'link'			=>	$data->link,
						'comments'		=>	$data->comments
					));
			if($pb->save())
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
		if(Jbranch::json()->where('scholar_id','=',$data->scholar_id)->where('location_id','=',$data->location_id))
		{
			return 0;
		}
		else
		{
			$sb =	Sbranch::create(array(
						'scholar_id'	=>	$data->scholar_id,
						'location_id'	=>	$data->location_id,
						'link'			=>	$data->link,
						'comments'		=>	$data->comments
					));
			if($sb->save())
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