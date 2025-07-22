<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Mostra todas as listagens
    public function index(){
        return view('listings.index', [
            //enviando os dados do heading e de todas as listagems
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    //Mostra uma listagem
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

}
