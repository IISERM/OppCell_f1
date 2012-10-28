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
		$id				=	$data->id;
		$name			=	$data->name;
		$link			=	$data->link;
		$comments 		=	$data->comments;
		$prog			=	Prog::find($id);
		$prog->name		=	$name;
		$prog->link		=	$link;
		$prog->comments	=	$comments;
		if($prog)
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
		$id				=	$data->id;
		$name			=	$data->name;
		$link			=	$data->link;
		$comments 		=	$data->comments;
		$job			=	Job::find($id);
		$job->name		=	$name;
		$job->link		=	$link;
		$job->comments	=	$comments;
		if($job)
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
		$id					=	$data->id;
		$name				=	$data->name;
		$link				=	$data->link;
		$comments 			=	$data->comments;
		$scholar			=	Scholar::find($id);
		$scholar->name		=	$name;
		$scholar->link		=	$link;
		$scholar->comments	=	$comments;
		if($scholar)
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
		$id						=	$data->id;
		$name					=	$data->name;
		$parent					=	$data->parent_id;
		$comment				=	$data->comments;
		$location				=	Location::find($id);
		$location->name			=	$name;
		$location->parent_id	=	$parent;
		$location->comments		=	$comment;
		if($location)
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
		$id						=	$data->id;
		$name					=	$data->name;
		$parent					=	$data->parent_id;
		$comment				=	$data->comments;
		$subject				=	Subject::find($id);
		$subject->name			=	$name;
		$subject->parent_id		=	$parent;
		$subject->comments		=	$comment;
		if($subject)
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
		$id						=	$data->id;
		$name					=	$data->name;
		$parent					=	$data->parent_id;
		$comment				=	$data->comments;
		$skill					=	Skill::find($id);
		$skill->name			=	$name;
		$skill->parent_id		=	$parent;
		$skill->comments		=	$comment;
		if($skill)
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
		$id						=	$data->id;
		$name					=	$data->name;
		$parent					=	$data->parent_id;
		$comment				=	$data->comments;
		$position				=	Position::find($id);
		$position->name			=	$name;
		$position->parent_id	=	$parent;
		$position->comments		=	$comment;
		if($position)
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
		$job	=	Job::find($data->job_id);
		$position =	Position::find($data->position_id);
		if(Jbranch::json()->where('job_id','=',$job)->where('position_id','=',$position))
		{
			return 0;
		}
		else
		{
			$jb =	Jbranch::create(array(
						'job_id'		=>	$job,
						'position_id'	=>	$position,
						'deadline'		=>	$data->deadline,
						'opening'		=>	$data->opening,
						'link'			=>	$data->link
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

	public function action_ppos()
	{
		$data	=	Input::json();
		$prog	=	Prog::find($data->prog_id);
		$position =	Position::find($data->position_id);
		if(Pbranch::json()->where('prog_id','=',$prog)->where('position_id','=',$position))
		{
			return 0;
		}
		else
		{
			$pb =	Pbranch::create(array(
						'prog_id'		=>	$prog,
						'position_id'	=>	$position,
						'deadline'		=>	$data->deadline,
						'opening'		=>	$data->opening,
						'link'			=>	$data->link
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

	public function action_spos()
	{
		$data	=	Input::json();
		$scholar	=	Scholar::find($data->scholar_id);
		$position =	Position::find($data->position_id);
		if(Sbranch::json()->where('scholar_id','=',$scholar)->where('position_id','=',$position))
		{
			return 0;
		}
		else
		{
			$sb =	Sbranch::create(array(
						'scholar_id'	=>	$scholar,
						'position_id'	=>	$position,
						'deadline'		=>	$data->deadline,
						'opening'		=>	$data->opening,
						'link'			=>	$data->link
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