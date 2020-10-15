<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add(){
        $this->render('add');
    }

    public function addAction(){
        $nome = filter_input(INPUT_POST,'nome');
        $email = filter_input(INPUT_POST,'email');
        //verificando se nome e email estão setados
        if($nome && $email){
            //verificando se o email já está cadastrado
            $data = Usuario::select()->where('email',$email)->execute();
            if(count($data)===0){
                //se ele não está cadastrado vamos fazer a inserção 
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email
                ])->execute();
                //redirect para home
                $this->redirect('/');
                exit;
            }
        }
        //redirect para /novo
        $this->redirect('/novo');
    }

    public function edit($args){
        //selecionando o usuário que será editado
        //$usuario = Usuario::select()->where('id',$args['id'])->one();
        $usuario=Usuario::select()->find($args['id']);//find usado quando temos o id do usuário
        $this->render('edit',[
            'usuario' => $usuario
        ]);
    }

    public function editAction($args){
        $nome = filter_input(INPUT_POST,'nome');
        $email = filter_input(INPUT_POST,'email');
        if($nome && $email){
            $data=Usuario::select()->where('email',$email)->execute();
            if(count($data)===0){
                Usuario::update()
                ->set('nome',$nome)
                ->set('email',$email)
                ->where('id',$args['id'])
                ->execute();
                $this->redirect('/');
                exit;
            }
        }
            $this->redirect('/usuario/'.$args['id'].'/edit');

    }

    public function del($args){
       Usuario::delete()->where('id',$args['id'])->execute();
        $this->redirect('/');
    }
}