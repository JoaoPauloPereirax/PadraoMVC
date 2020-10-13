<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        //para carregar um view usamos
        $this->render('home');
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
        echo "Opa, fotos?";
    }
}