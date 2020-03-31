<?php

use Illuminate\Support\Facades\Route;
Route::get('/', ['as' => 'home', 'uses' => 'Controlador_Paginas@home']);
Route::resource('finanzas', 'Finanzas_Controller');
