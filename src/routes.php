<?php
use core\Router;

$router = new Router();

$router->get('/','HomeController@index');
//HomeController = nome do controller
//Depois do @ colocamos o método

//rota para  a página de adição
$router->get('/novo', 'UsuariosController@add');

//rota para ação "adicionar usuário"
$router->post('/novo', 'UsuariosController@addAction');

//rota para editar usuário
$router->get('/usuario/{id}/edit','UsuariosController@edit');
$router->post('/usuario/{id}/edit','UsuariosController@editAction');

//rota para excluir usuário
$router->get('/usuario/{id}/excluir','UsuariosController@del');