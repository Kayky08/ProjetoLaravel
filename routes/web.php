<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//Rotas padrões de recursos
// index - Mostra todos as Listagens
// show - Mostra uma listagem
// create - Cria uma listagem
// store - Armazena uma listagem
// edit - Busca uma listagem e edita
// update - Atualza uma listagem
// destroy - Deleta uma listagem

// Rotas Listagem
Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);

