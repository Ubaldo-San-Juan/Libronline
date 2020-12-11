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
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControlButtons').view('addUserDB').view('importJSBootstrap');	
	}

	public function AddUserHidden()
	{
		$request = \Config\Services::request();

		$id = $request->getPost('userID');
		$nombre = $request->getPost('userName');
		$email = $request->getPost('userEmail');
		$password = $request->getPost('userPassword');
		$tipoCuenta = $request->getPost('accountType');

		$data = [
			'id' => $id,
    		'nombreUsuario' => $nombre,
    		'correo'    => $email,
			'contrasena' => $password,
			'tipoCuenta' => $tipoCuenta
		];

		$varModelo = new Usuarios($db); // Instancia el una variable de tipo MyModel
		$varModelo->insert($data); //Se manda el arreglo data al método insert a nuestra BD en VarModelox
		
		return $this->AddUser();
	}

	public function AddUserStatic()
	{
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControlButtons').view('addUser').view('importJSBootstrap');
	}

	public function AddPost()
	{
		return view('genericHeader').view('postControlNavbar').view('controlPanelContainer').view('postControlButtons').view('addPostDB').view('importJSBootstrap');
	}

	public function AddPostHidden()
	{
		$request = \Config\Services::request();

		$titulo = $request->getPost('title');
		$autor = $request->getPost('postAuthor');
		$fechaPublicacion = $request->getPost('postDate');
		$categoria = $request->getPost('postCategory');
		$contenido = $request->getPost('content');
		$fueEditado = FALSE;
		$fechaHoy = date('Y-m-d h:i:s');

		if($fechaPublicacion == '')
		{
			$fechaPublicacion = $fechaHoy;
		}

		if($fechaPublicacion != date('Y-m-d'))
		{
			$fueEditado = TRUE;
		}

		$data = [
			'id' => NULL,
    		'urlArticulo' => 'abcdef',
			'titulo'    => $titulo,
			'autor' => $autor,
			'fechaPublicacion' => $fechaPublicacion,
			'categoria' => $categoria,
			'contenido' => $contenido,
			'cantidadComentarios' => 0,
			'fueEditado' => $fueEditado,
			'fechaEdicion' => $fechaHoy
		];

		$varModelo = new Articulos($db); // Instancia el una variable de tipo MyModel
		$varModelo->insert($data); //Se manda el arreglo data al método insert a nuestra BD en VarModelox
		return $this->AddPost;
	}

	public function AddPostStatic()
	{
		return view('genericHeader').view('postControlNavbar').view('controlPanelContainer').view('postControlButtons').view('addPost').view('importJSBootstrap');
	}

	public function AddCategory()
	{
		return view('genericHeader').view('categoryControlNavbar').view('controlPanelContainer').view('categoryControlButtons').view('addCategory').view('importJSBootstrap');
	}

	public function EditUser()
	{
		$request = \Config\Services::request();

		$id = $request->getPost('userID');
		$varModelo = new Usuarios($db);
        $varDatos['usuarios'] = $varModelo->findAll();
		return view('genericHeader').view('userControlNavbar').view('controlPanelContainer').view('userControlButtons').view('editUser', $varDatos).view('importJSBootstrap');
	}
	public function EditUserHidden()
	{
		$request = \Config\Services::request();

		$id = $request->getPost('userID');
		$nombre = $request->getPost('userName');
		$email = $request->getPost('userEmail');
		$password = $request->getPost('userPassword');
		$tipoCuenta = $request->getPost('accountType');

		$data = [
			'id' => $id,
    		'nombreUsuario' => $nombre,
    		'correo'    => $email,
			'contrasena' => $password,
			'tipoCuenta' => $tipoCuenta
		];

		$varModelo = new Usuarios($db); // Instancia el una variable de tipo MyModel
		$varModelo->update($data); //Se manda el arreglo data al método insert a nuestra BD en VarModelox
		
		return $this->User();
	}
	//--------------------------------------------------------------------

}
