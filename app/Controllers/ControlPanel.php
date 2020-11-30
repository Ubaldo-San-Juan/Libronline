<?php namespace App\Controllers;

class ControlPanel extends BaseController
{
	public function index()
	{
		return view('genericHeader').view('controlPanelNavbar').view('sidebar').view('mainContent').view('post').view('post2').view('importJSBootstrap');
	}

	//--------------------------------------------------------------------

}
