<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    
    $items = config("items");
    // ordino gli items alfabeticamente
    $items = collect($items)->sortBy('name')->toArray();
    
     return view('search', [
        'items' => $items
    ]);
   
});
Route::get('/selection/{id}', function ($id) {
    
     $stores = config("stores");
    // creo array vuoto
     $filtered = [];
    // controllo corrispondeza id qty mqty e sottrazione

     foreach ( $stores as $store ) {
         foreach ( $store["items"] as $item ) {
             if ( $item["id"] == $id && $item["qty"] < $item["minQty"] ) {
                 $store["articoliInviati"] = $item["minQty"] - $item["qty"];

                //  pusho risultati in array filtered
                 $filtered[] = $store;
             }
         }
     }
    //  ordino magazzini per distanza
     $stores = collect($filtered)->sortBy('distance')->toArray();
    
     $items = config("items");

    //  passo nomi items anche nella selection view
     foreach ($items as $item) {
         if($item['id'] == $id) {
             $nome_prodotto = $item['name'];
         }
     }

     return view('selection', [
        "stores" => $stores,
        "nome_prodotto" => $nome_prodotto        
    ]);

});