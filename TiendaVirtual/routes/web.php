<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Persona\PersonaController;
use App\Http\Controllers\HomeController;


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

Route::get('/', HomeController::class);

Route::resource('personas',PersonaController::class);



/*Route::get('persona/{persona}/{venta?}',function ($persona,$venta=null){
    if ($venta){
        return "esta es la vista de la persona $persona, que acaba de comprar $venta";
    }else{
        return "esta es la vista de la persona $persona";
    }

});*/




