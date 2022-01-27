<?php

use App\Http\Controllers\ListSparepart;
use App\Http\Controllers\ListSparepartController;
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
    return view('home', [
        "nama_produk" => "Face Comp K44 Beat K25 K81 , SCOOPY VARIO",
        "category" => "Mesin",
        "detail_product" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, error.",
        "harga" => "Rp. 67.000"
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');

});

Route::get('/list_sparepart', function () {
    return view('list_sparepart', [
        "nama_produk" => "Face Comp K44 Beat K25 K81 , SCOOPY VARIO",
        "category" => "Mesin",
        "detail_product" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, error.",
        "harga" => "Rp. 67.000"
    ],
    [
        "nama_produk" => "Face Comp K44 Beat K25 K81 , SCOOPY VARIO",
        "category" => "Mesin",
        "detail_product" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, error.",
        "harga" => "Rp. 67.000"
    ]

);

});

// Route::resource('list_spareparts', ListSparepartController::class);