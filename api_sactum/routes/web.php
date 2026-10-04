<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('welcome');
   abort(403,"Acesso não Autorizado!");
});
