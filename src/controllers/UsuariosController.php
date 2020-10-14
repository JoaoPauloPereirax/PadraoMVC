<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add(){
        $this->render('add');
    }

    public function addaction(){
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

}