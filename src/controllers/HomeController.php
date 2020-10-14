<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {

        $posts=[
            ['titulo' => 'Título teste 1', 'corpo' => 'Corpo de teste 1'],
            ['titulo' => 'Título teste 2', 'corpo' => 'Corpo de teste 2'],
            ['titulo' => 'Título teste 3', 'corpo' => 'Corpo de teste 3'],
            ['titulo' => 'Título teste 4', 'corpo' => 'Corpo de teste 4']
        ];

        $nome="João Paulo Pereira";
        //para carregar um view usamos
        $this->render('home',[
            'nome' => $nome,
            'idade' =>24,
            'posts' => $posts
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