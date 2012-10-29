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
		$prog = Prog::create(array(
				'name'		=>	$data->name,
				'link'		=>	$data->link,
				'comments'	=>	$data->comments
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
		if(!Jpos::where('jbranches_id','=',$data->jbranch_id)->where('positions_id','=',$data->position_id)->get())
		{
			return 0;
		}
		else
		{
			$jb =	Jpos::create(array(
						'jbranches_id'		=>	$data->job_id,
						'positions_id'	=>	$data->position_id,
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
		if(Ppos::where('pbranches_id','=',$data->pbranch_id)->where('positions_id','=',$data->position_id)->get())
		{
			return 0;
		}
		else
		{
			$pb =	Ppos::create(array(
						'pbranches_id'	=>	$data->pbranch_id,
						'positions_id'	=>	$data->position_id,
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
		if(Spos::where('sbranches_id','=',$data->sbranch_id)->where('positions_id','=',$data->position_id)->get())
		{
			return 0;
		}
		else
		{
			$sb =	Spos::create(array(
						'sbranches_id'	=>	$data->sbranch_id,
						'positions_id'	=>	$data->position_id,
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
			$job->subject()->attach($subject);
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
		if($prog->subject()->attach($subject))
		{
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
		if($scholar->subject()->attach($subject))
		{
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
		if(Jbranch::where('jobs_id','=',$data->job_id)->where('locations_id','=',$data->location_id)->get())
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
		if(Sbranch::where('scholars_id','=',$data->scholar_id)->where('locations_id','=',$data->location_id)->get())
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