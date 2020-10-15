<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        //armazenando os dados em uma variável
        $usuarios = Usuario::select()->execute();
        
        //para carregar um view usamos
        //$this->render('home');

        //disponibilizando a lista para a página
        $this->render('home',[
            'usuarios' => $usuarios
        ]);

    }

    public function foto($idfoto){
        echo "Foto: ".$idfoto['id'];
    
    }

    public function perfil(){
        $this->render('perfil');
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function fotos(){
        $this->render('fotos');
    }
}