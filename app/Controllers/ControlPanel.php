<?php namespace App\Controllers;

use App\Models\Articulos;
use App\Models\Comentarios;
use App\Models\Categorias;
use App\Models\Usuarios;

class ControlPanel extends BaseController
{
	public function index()
	{
		return view('genericHeader').view('controlPanelNavbar').view('controlPanelContainer').view('controlPanelIndex').view('importJSBootstrap');
	}

	public function User()
	{
		$varModelo = new Usuarios($db);
        $varDatos['usuarios'] = $varModelo->findAll();
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControlButtons').view('userControlTemplate', $varDatos).view('importJSBootstrap');
	}

	public function UserStatic()
	{
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControlButtons').view('userControl').view('importJSBootstrap');
	}

	public function Post()
	{
		$varModelo = new Articulos($db);
        $varDatos['articulos'] = $varModelo->findAll();
		return view('genericHeader').view('postControlNavbar').view('controlPanelContainer').view('postControlButtons').view('postControlTemplate', $varDatos).view('importJSBootstrap');
	}

	public function PostStatic()
	{
		return view('genericHeader').view('postControlNavbar').view('controlPanelContainer').view('postControlButtons').view('postControl').view('importJSBootstrap');
	}

	public function Category(){
		$varModelo = new Categorias($db);
        $varDatos['categorias'] = $varModelo->findAll();
		return view('genericHeader').view('categoryControlNavbar').view('controlPanelContainer').view('categoryControlButtons').view('categoryControlTemplate', $varDatos).view('importJSBootstrap');
	}

	public function CategoryStatic(){
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
