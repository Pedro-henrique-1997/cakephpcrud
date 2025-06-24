<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{
    public function index(){
        //$usuarios = "Pedro";
        //$this->set(['usuarios' => $usuarios]);

        $usuarios = $this->Usuarios->find()->all();
        $this->set(compact('usuarios'));
    }
}
