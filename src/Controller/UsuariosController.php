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

        //$usuarios = $this->Usuarios->find()->all();
        $this->paginate = [
            'limit' => 3,
            'order' => [
                'Usuarios.id' => 'asc',
            ]
        ];
        $usuarios = $this->paginate($this->Usuarios);
        $this->set(compact('usuarios'));
    }

    public function add(){

        $user = $this->Usuarios->newEntity([]);
        if($this->request->is("post")){
            $user = $this->Usuarios->patchEntity($user, $this->request->getData());
            if($this->Usuarios->save($user)){
                $this->Flash->success(__("Usuario Cadastrado com Sucesso"));
                return $this->redirect(["action" => "index"]);
            }else{
                $this->Flash->error(__("Usuario não Cadastrado com Sucesso"));
            }
        }

        $this->set(compact('user'));
    }

    public function view($id = null){
        
        $usuarios = $this->Usuarios->get($id);
        $this->set(compact('usuarios'));
    }
}
