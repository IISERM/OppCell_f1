<?php

class List_Controller extends Base_Controller
{

	public function action_index()
	{
		return Response::error('404');
	}

	public function action_prog()
	{
		$name	=	Input::get('name');
		$link	=	Input::get('link','');
		$comments =	Input::get('comments','');
		$prog = Prog::create(
				'name'		=>	$name,
				'link'		=>	$link,
				'comment'	=>	$comments
			);
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
		$name	=	Input::get('name');
		$link	=	Input::get('link','');
		$comments =	Input::get('comments','');
		$job = Job::create(
				'name'		=>	$name,
				'link'		=>	$link,
				'comment'	=>	$comments
			);
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
		$name	=	Input::get('name');
		$link	=	Input::get('link','');
		$comments =	Input::get('comments','');
		$scholar =	Scholar::create(
				'name'		=>	$name,
				'link'		=>	$link,
				'comment'	=>	$comments
			);
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
		$name	=	Input::get('name');
		$parent	=	Input::get('parent_id',0);
		$comment=	Input::get('comments', '');
		$location=	Location::create(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			);
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
		$name	=	Input::get('name');
		$parent	=	Input::get('parent_id',0);
		$comment=	Input::get('comments', '');
		$subject=	Subject::create(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			);
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
		$name	=	Input::get('name');
		$parent	=	Input::get('parent_id',0);
		$comment=	Input::get('comments', '');
		$skill	=	Skill::create(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			);
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
		$name	=	Input::get('name');
		$parent	=	Input::get('parent_id',0);
		$comment=	Input::get('comments', '');
		$position=	Position::create(
				'name'		=>	$name,
				'parent_id'	=>	$parent,
				'comments'	=>	$comment
			);
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
		$pos = Position::find(Input::get('position_id'));
		if($pos->skills()->sync(Input::get('skill_id')))
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
		$job	=	Job::find(Input::get('job_id'));
		$position =	Position::find(Input::get('position_id'));
		if(Jbranch::get()->where('job_id','=',$job)->where('position_id','=',$position))
		{
			return 0;
		}
		else
		{
			$jb =	Jbranch::create(
						'job_id'		=	$job,
						'position_id'	=	$position,
						'deadline'		=	Input::get('deadline'),
						'opening'		=	Input::get('opening'),
						'link'			=	Input::get('link')
					);
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
		$prog	=	Prog::find(Input::get('prog_id'));
		$position =	Position::find(Input::get('position_id'));
		if(Pbranch::get()->where('prog_id','=',$prog)->where('position_id','=',$position))
		{
			return 0;
		}
		else
		{
			$pb =	Pbranch::create(
						'prog_id'		=	$prog,
						'position_id'	=	$position,
						'deadline'		=	Input::get('deadline'),
						'opening'		=	Input::get('opening'),
						'link'			=	Input::get('link')
					);
			if($pb)
			{
				return 1;
			}
			else
			{
				return 0;
			}
	}

	public function action_spos()
	{
		$scholar	=	Scholar::find(Input::get('scholar_id'));
		$position =	Position::find(Input::get('position_id'));
		if(Sbranch::get()->where('scholar_id','=',$scholar)->where('position_id','=',$position))
		{
			return 0;
		}
		else
		{
			$sb =	Sbranch::create(
						'scholar_id'	=	$scholar,
						'position_id'	=	$position,
						'deadline'		=	Input::get('deadline'),
						'opening'		=	Input::get('opening'),
						'link'			=	Input::get('link')
					);
			if($sb)
			{
				return 1;
			}
			else
			{
				return 0;
			}
	}

	public function action_jsub()
	{
		$job	=	Job::find(Input::get('job_id'));
		$subject = Input::get('subject_id');
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
		$prog	=	Prog::find(Input::get('prog_id'));
		$subject = Input::get('subject_id');
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
		$scholar	=	Scholar::find(Input::get('scholar_id'));
		$subject = Input::get('subject_id');
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
		$job	=	Job::find(Input::get('job_id'));
		$location =	Location::find(Input::get('location_id'));
		if(Jbranch::get()->where('job_id','=',$job)->where('location_id','=',$location))
		{
			return 0;
		}
		else
		{
			$jb =	Jbranch::create(
						'job_id'		=	$job,
						'location_id'	=	$location,
						'link'			=	Input::get('link', ''),
						'comments'		=	Input::get('comments','')
					);
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
		$prog	=	Prog::find(Input::get('prog_id'));
		$location =	Location::find(Input::get('location_id'));
		if(Jbranch::get()->where('prog_id','=',$prog)->where('location_id','=',$location))
		{
			return 0;
		}
		else
		{
			$pb =	Pbranch::create(
						'prog_id'		=	$prog,
						'location_id'	=	$location,
						'link'			=	Input::get('link', ''),
						'comments'		=	Input::get('comments','')
					);
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
		$scholar	=	Scholar::find(Input::get('scholar_id'));
		$location =	Location::find(Input::get('location_id'));
		if(Jbranch::get()->where('scholar_id','=',$scholar)->where('location_id','=',$location))
		{
			return 0;
		}
		else
		{
			$sb =	Sbranch::create(
						'scholar_id'		=	$scholar,
						'location_id'	=	$location,
						'link'			=	Input::get('link', ''),
						'comments'		=	Input::get('comments','')
					);
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