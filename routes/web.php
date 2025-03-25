<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Home::Class, 'Home']);


Route::get('/Localizacao', [\App\Http\Controllers\Localizacao::class, 'Localizacao']);


Route::get('/Produtos', [\App\Http\Controllers\Produtos::class, 'Produtos']);


Route::get('/SobreNos', [\App\Http\Controllers\SobreNos::class, 'SobreNos']);
