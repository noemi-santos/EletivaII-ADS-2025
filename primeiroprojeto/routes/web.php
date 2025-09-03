<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;
use App\Http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);
//Listar Clientes - GET /clientes
//Abrir formulário para inserir registro - GET/clientes/create
//Salvar dados - POST /clientes -- método store
//Mostrar dados do registro - GET /cleintes/ {id_clientes} -- método show
//Abrir formulário para editar registro - GET /clientes/{id_clientes}/edit -- método edit
//Salvar alterações - PUT /clientes/{id_clientes} -- método update
//Excluir um registro - DELETE /clientes/{id_cliente} -- método destroy








//Route::get("/clientes", function() {return view("clientes.index");});

Route::get('/teste', [PrimeiraController::class, "teste"]);

Route::get('/exemplo', [PrimeiraController::class, "abrirForm"]);
Route::post('/exemplo_resposta', [PrimeiraController::class, "resposta"]);

Route::get('/exercicio2', [PrimeiraController::class, "exercicio2"]);
Route::post('/resposta_exercicio2', [PrimeiraController::class, "respExercicio2"]);

