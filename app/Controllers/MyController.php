<?php namespace App\Controllers;

class MyController extends BaseController
{
	public function index()
	{
		return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('post').view('post2').view('importJSBootstrap');
	}

	public function login()
	{
		return view('genericHeader').view('genericNavbar').view('login').view('importJSBootstrap');
	}

	public function register()
	{
		return view('genericHeader').view('genericNavbar').view('register').view('importJSBootstrap');
	}
	
	public function Vaporeon()
	{
		return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('post').view('commentsContainer');
	}

	//--------------------------------------------------------------------

}
