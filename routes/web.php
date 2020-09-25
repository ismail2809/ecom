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

/*Route::get('/index', function () {
    return view('layout.index');
});*/

/*Route::get('/catalogue', function () {
    return view('catalogue.index');
});*/
 
/*Route::get('/new/produit', function () {
    return view('product.new');
});*/

/*Route::get('/new/commande', function () {
    return view('commande.new');
});*/

Route::get('/panier', function () {
    return view('panier.panier');
});

//products
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/new/product', [App\Http\Controllers\ProductController::class, 'new']);
Route::post('/product_store', [App\Http\Controllers\ProductController::class, 'store'])->name('product_store');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show']);


//commandes
Route::post('/commande_store', [App\Http\Controllers\CommandeController::class, 'commande_store'])->name('commande_store');
Route::get('/new/commande', [App\Http\Controllers\CommandeController::class, 'new']);

Route::get('/commander/product/{id}', [App\Http\Controllers\CommandeController::class, 'commander_product']);
Route::post('/commander_product_qte/{id}', [App\Http\Controllers\CommandeController::class, 'commander_product_qte']);
