<?php
Route::get('/', 'ProdutoController@lista');
Route::get('/produtos/detalhes/{id}', 'ProdutoController@detalhes')->where('id', '[0-9]+');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/namespace', 'ProdutoController@qualNamespace');
Route::get('/produtos/janelas', 'ProdutoController@testandoJanelas');
