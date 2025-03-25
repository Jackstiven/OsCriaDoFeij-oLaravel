<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Home::Class, 'Home'])->name('Site.Principal');


Route::get('/Localizacao', [\App\Http\Controllers\Localizacao::class, 'Localizacao'])->name('Site.Localizacao');


Route::get('/Produtos', [\App\Http\Controllers\Produtos::class, 'Produtos'])->name('Site.Produtos');


Route::get('/SobreNos', [\App\Http\Controllers\SobreNos::class, 'SobreNos'])->name('Site.SobreNos');
