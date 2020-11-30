<?php namespace App\Controllers;

class ControlPanel extends BaseController
{
	public function index()
	{
		return view('genericHeader').view('controlPanelNavbar').view('controlPanelContainer').view('controlPanelIndex').view('importJSBootstrap');
	}

	public function User()
	{
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControl').view('importJSBootstrap');
	}

	public function Post()
	{
		return view('genericHeader').view('postControlNavbar').view('controlPanelContainer').view('postControl').view('importJSBootstrap');
	}

	public function Category(){
		return view('genericHeader').view('categoryControlNavbar').view('controlPanelContainer').view('categoryControl').view('importJSBootstrap');
	}
	//--------------------------------------------------------------------

}
