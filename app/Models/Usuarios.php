<?php namespace App\Models;

use CodeIgniter\Model;

//TOCA TENER UN MODELO POR TABLA

class Usuarios extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true; // No elimina DIRECTAMENTE los datos almacenados

    protected $allowedFields = ['nombreUsuario', 'correo', 'contrasena', 'tipoCuenta']; // Se añaden las columnas editables

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}