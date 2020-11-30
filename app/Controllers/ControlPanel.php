<?php namespace App\Controllers;

class ControlPanel extends BaseController
{
	public function index()
	{
		return view('genericHeader').view('controlPanelNavbar').view('controlPanelContainer').view('controlPanelIndex').view('importJSBootstrap');
	}

	public function User()
	{
		return view('genericHeader').view('controlPanelNavbar').view('controlPanelContainer').view('userControl').view('importJSBootstrap');
	}

	//--------------------------------------------------------------------

}
