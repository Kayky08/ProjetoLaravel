<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//Chamando todas as Listagens
//Criando uma rota e chamando o metodo statico get
Route::get('/', function () {
    //chamando a view listenings
    return view('listings', [
        //enviando os dados do heading e de todas as listagems
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Chamando uma Listagem
Route::get('/listing', function (){
    return view('listings', [
        'heading' => 'One Listing',
        'listing' => Listing::find(1)
    ]);
});