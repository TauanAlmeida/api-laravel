<?php

//Route::get('clientes', 'ClienteApiController@index');

//Rotas de Login
$this->post('login', 'Auth\AuthenticateController@authenticate');
$this->post('login-refresh', 'Auth\AuthenticateController@refreshToken');

$this->get('me', 'Auth\AuthenticateController@getAuthenticatedUser');

//Rotas de Clientes
$this->get('clientes/{id}/filmes-alugados', 'ClienteApiController@alugados');
$this->get('clientes/{id}/documento', 'ClienteApiController@documento');
$this->get('clientes/{id}/telefone', 'ClienteApiController@telefone');
$this->apiResource('clientes', 'ClienteApiController');

//Rotas de Documento
$this->get('documento/{id}/cliente', 'DocumentoApiController@cliente');
$this->apiResource('documento', 'DocumentoApiController');

//Rotas Telefone
$this->get('telefone/{id}/cliente', 'TelefoneApiController@cliente');
$this->apiResource('telefone', 'TelefoneApiController');

//Rotas de filmes
$this->apiResource('filme', 'filmeApiController');