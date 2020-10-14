<?php
use core\Router;

$router = new Router();

$router->get('/','HomeController@index');
//HomeController = nome do controller
//Depois do @ colocamos o método

//rota para  a página de adição
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addaction');