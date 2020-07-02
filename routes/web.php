<?php
use App\vistorias;

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

Route::get('teste', function () {
    $vistoria  = App\Vistoria::all();

    dd($vistoria->movimentos);
});
//não deletar
Auth::routes();
//não deletar
Route::get('/home', 'HomeController@index')->name('home');
//viem de registro de usuarios
Route::resource('/admin/users', 'Admin\UserController');

//====================VISTORIAS=====================
Route::resource(/*nome*/'/vistorias', /*controller*/'Vistorias\VistoriasContoller');
Route::get('/vistorias/destroy/{id}', 'Vistorias\VistoriasContoller@destroyConfirm')->name('vistorias.destroy-confirm');  


//===================MOVIMENTOS======================    
Route::resource(/*nome*/'/movimentos', /*controller*/'Movimento\MovimentosContoller');
Route::get('/movimentos/destroy/{id}', 'Movimento\MovimentosContoller@destroyConfirm')->name('movimentos.destroy-confirm');

  
//====================ITINERARIOS=====================
Route::resource(/*nome*/'/itinerarios', /*controller*/'Itinerario\ItinerariosContoller'); 
Route::get('/itinerarios/destroy/{id}', 'Itinerario\ItinerariosContoller@destroyConfirm')->name('itinerarios.destroy-confirm');  