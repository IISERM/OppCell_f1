<?php

class Add_Controller extends Base_Controller
{

	public function action_index()
	{
		return Response::error('404');
	}

	public function action_prog()
	{
		$data	=	Input::json();
		$name	=	$data->name;
		$link	=	$data->link;
		$comments =	$data->comments;
		$prog = Prog::create(array(
				'name'		=>	$name,
				'link'		=>	$link,
				'comments'	=>	$comments
			));
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
		$data	=	Input::json();
		$name	=	$data->name;
		$link	=	$data->link;
		$comments =	$data->comments;
		$job = Job::create(array(
				'name'		=>	$name,
				'link'		=>	$link,
				'comments'	=>	$comments
			));
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
		$data	=	Input::json();
		$name	=	$data->name;
		$link	=	$data->link;
		$comments =	$data->comments;
		$scholar =	Scholar::create(array(
				'name'		=>	$name,
				'link'		=>	$link,
				'comments'	=>	$comments
			));
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
		$data	=	Input::json();
		$name	=	$data->name;
		$parent	=	$data->parent_id;
		$comment=	$data->comments;
		$location=	Location::create(array(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			));
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
		$data	=	Input::json();
		$name	=	$data->name;
		$parent	=	$data->parent_id;
		$comment=	$data->comments;
		$subject=	Subject::create(array(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			));
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
		$data	=	Input::json();
		$name	=	$data->name;
		$parent	=	$data->parent_id;
		$comment=	$data->comments;
		$skill	=	Skill::create(array(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			));
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
		$data	=	Input::json();
		$name	=	$data->name;
		$parent	=	$data->parent_id;
		$comment=	$data->comments;
		$position=	Position::create(array(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			));
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
		$data	=	Input::json();
		$pos = Position::find($data->position_id);
		if($pos->skills()->sync($data->skill_id))
		{
			return 1;
		}
		else
		{
			return 0;
		}
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
		$job	=	Jbranch::find($data->jbranch_id);
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
		$prog	=	Pbranch::find($data->pbranch_id);
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
		$scholar	=	Sbranch::find($data->sbranch_id);
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
		if(Jbranch::get()->where('jobs_id','=',$data->job_id)->where('locations_id','=',$data->location_id))
		{
			return 0;
		}
		else
		{
			$jb =	Jbranch::create(array(
						'jobs_id'		=>	$data->job_id,
						'locations_id'	=>	$data->location_id,
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
		if(Pbranch::where('progs_id','=',$data->prog_id)->where('locations_id','=',$data->location_id)->get())
		{
			return 0;
		}
		else
		{
			$pb =	Pbranch::create(array(
						'progs_id'		=>	$data->prog_id,
						'locations_id'	=>	$data->location_id,
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
		if(Sbranch::get()->where('scholars_id','=',$data->scholar_id)->where('locations_id','=',$data->location_id))
		{
			return 0;
		}
		else
		{
			$sb =	Sbranch::create(array(
						'scholars_id'	=>	$data->scholar_id,
						'locations_id'	=>	$data->location_id,
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