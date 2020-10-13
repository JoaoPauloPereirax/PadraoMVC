<?php
use core\Router;

$router = new Router();

$router->get('/fotos','HomeController@fotos');
//HomeController = nome do controller
//Depois do @ colocamos o método
$router->get('/perfil','HomeController@perfil');

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');