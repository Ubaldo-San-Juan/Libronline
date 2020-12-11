<?php namespace App\Controllers;

use App\Models\Articulos;
use App\Models\Comentarios;
use App\Models\Usuarios;

class Post extends BaseController
{
	public function index()
	{
		return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('postTemplate').view('importJSBootstrap');
    }
    public function test()
    {
        $varModelo = new Articulos($db);
        $varDatos['articulos'] = $varModelo->findAll();
        return view('test',$varDatos);
    }
    public function Vaporeon()
    {
        /*$varModelo = new Articulos($db);
        $varDatos['articulos'] = $varModelo->findAll();*/
        $db = \Config\Database::connect();
		$builder = $db->table('articulos');
		$builder->select('*');
        $builder->join('usuarios', 'articulos.autor=usuarios.id');
		$variableQuery = $builder->getWhere(['urlArticulo' => 'Vaporeon']);
        $varDatos['articulos'] = $variableQuery->getResultArray();
        return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('postTemplate',$varDatos).view('commentsContainer').$this->comentarios(1).view('importJSBootstrap'); //cambiar la forma de mandar el id del articulo
    }
    public function comentarios(string $idArticulo)
    {
        //Consulta con join
        $db = \Config\Database::connect();
		$builder = $db->table('comentarios');
		$builder->select('*');
        $builder->join('usuarios', 'comentarios.autor=usuarios.id');
		$variableQuery = $builder->getWhere(['articulo' => $idArticulo]);
        $varDatos['comentarios'] = $variableQuery->getResultArray(); //Muestra la tabla
        return view('comentarioTemplate', $varDatos);
    }
}