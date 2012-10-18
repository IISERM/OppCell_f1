<?php

class Admin_Controller extends Base_Controller {

	public function action_index()
	{
		return View::make('admin.index');
	}

	public function action_js_main()
	{
		return View::make('admin.js.main');
	}


	public function action_atemplates_scholarships()
	{
		return View::make('admin.atemplates.scholarships');
	}

	public function action_atemplates_progs()
	{
		return View::make('admin.atemplates.progs');
	}

}