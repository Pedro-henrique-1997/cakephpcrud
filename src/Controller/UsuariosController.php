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

    public function edit($id = null){
        $usuarios_edit = $this->Usuarios->get($id);
        if($this->request->is(['post', 'put'])){
            $this->Usuarios->patchEntity($usuarios_edit, $this->request->getData());
            if($this->Usuarios->save($usuarios_edit)){
                $this->Flash->success(__("Os dados do usuario foram editados"));

                return $this->redirect(["action" => "index"]);
            }else{
                $this->Flash->error(__("Os dados do usuario não foram editados"));
            }
        }

        $this->set(compact('usuarios_edit'));
    }

    public function deletar($id = null){
        $this->request->allowMethod(['post', 'delete']);

        $usuarios_deletar = $this->Usuarios->get($id);
        if($this->Usuarios->delete($usuarios_deletar)){
            $this->Flash->success(__("Usuario deletado com Sucesso"));
        }else{
            $this->Flash->error(__("Erro ao deletar o usuario"));
        }

        return $this->redirect(['action' => 'index']);
    }
}
