<?php namespace App\Controllers;

use App\Models\Articulos;
use App\Models\Comentarios;

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
        $varModelo = new Articulos($db);
        $varDatos['articulos'] = $varModelo->findAll();
        return view('genericHeader').view('genericNavbar').view('sidebar').view('mainContent').view('postTemplate',$varDatos).view('importJSBootstrap');
    }
    public function comentarios()
    {
        //Consulta con join
        $varModelo = new Comentarios($db);
        $varDatos['comentarios'] = $varModelo->findAll();
        return view('testComentarios', $varDatos);
    }
}