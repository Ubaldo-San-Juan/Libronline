<?php namespace App\Controllers;

class ControlPanel extends BaseController
{
	public function index()
	{
		return view('genericHeader').view('controlPanelNavbar').view('controlPanelContainer').view('controlPanelIndex').view('importJSBootstrap');
	}

	public function User()
	{
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControlButtons').view('userControl').view('importJSBootstrap');
	}

	public function Post()
	{
		return view('genericHeader').view('postControlNavbar').view('controlPanelContainer').view('postControlButtons').view('postControl').view('importJSBootstrap');
	}

	public function Category(){
		return view('genericHeader').view('categoryControlNavbar').view('controlPanelContainer').view('categoryControlButtons').view('categoryControl').view('importJSBootstrap');
	}

	public function AddUser()
	{
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControlButtons').view('addUser').view('importJSBootstrap');
	}

	public function AddPost()
	{
		return view('genericHeader').view('postControlNavbar').view('controlPanelContainer').view('postControlButtons').view('addPost').view('importJSBootstrap');
	}

	public function AddCategory()
	{
		return view('genericHeader').view('categoryControlNavbar').view('controlPanelContainer').view('categoryControlButtons').view('addCategory').view('importJSBootstrap');
	}
	//--------------------------------------------------------------------

}
