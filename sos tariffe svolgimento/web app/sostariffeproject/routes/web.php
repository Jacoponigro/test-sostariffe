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
    // $items = config("items");

    // $items = collect($items)->sortBy('name')->toArray();

    // return view('search', compact($items));
    return view('search');
});
Route::get('/selection/{id}', function ($id) {
    
    // $stores = collect(config("stores"));

    // $filtered = $stores->filter(function ($value, $key) use($id) {
    //     foreach($value["items"] as $item) {
    //         if($item['id'] == $id && $item["qty"] < $item["minQty"]) {
    //             return $value;
    //         }
    //     }
    // });

    // $items = collect($filtered)->sortBy('distance')->toArray();
    // dd($items);
    return view('selection');

});
Route::get('/thanks', function () {
    return view('thanks');

});

