<?php namespace App\Controllers;

use App\Models\Usuarios;
use App\Models\Articulos;

class MyController extends BaseController
{
	public function index()
	{

		return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('post').view('post2').view('importJSBootstrap');
	}

	public function login()
	{
		return view('genericHeader').view('genericNavbar').view('loginDB').view('importJSBootstrap');
	}

	public function respuestaLogin()
	{
		return view('genericHeader').view('genericNavbar').view('loginSuccess').view('importJSBootstrap');
	}

	public function loginStatic()
	{
		return view('genericHeader').view('genericNavbar').view('login').view('importJSBootstrap');
	}

	public function register()
	{
		return view('genericHeader').view('genericNavbar').view('registerDB').view('importJSBootstrap');
	}

	public function RespuestaRegistro()
	{
		$request = \Config\Services::request();

		$nombre = $request->getPost('inputName');
		$email = $request->getPost('inputEmail');
		$password = $request->getPost('inputPassword');

		$data = [
			'id' => NULL,
    		'nombreUsuario' => $nombre,
    		'correo'    => $email,
			'contrasena' => $password,
			'tipoCuenta' => 'Lector'
		];

		$varModelo = new Usuarios($db); // Instancia el una variable de tipo MyModel
		$varModelo->insert($data); //Se manda el arreglo data al método insert a nuestra BD en VarModelox

		return view('genericHeader').view('genericNavbar').view('registerSuccess').view('importJSBootstrap');
	}

	public function registerStatic()
	{
		return view('genericHeader').view('genericNavbar').view('register').view('importJSBootstrap');
	}

	public function Categories()
	{
		return view('genericHeader').view('genericNavbar').view('categories').view('importJSBootstrap');
	}

	public function Vaporeon()
	{
		return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('post').view('commentsContainer').view('comentario1').view('comentario2').view('importJSBootstrap');
	}

	public function Grumps()
	{
		return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('post2').view('commentsContainer').view('comentario1').view('comentario2').view('addComment').view('importJSBootstrap');
	}

	//--------------------------------------------------------------------

}
