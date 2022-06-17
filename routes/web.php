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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| MENU DE GESTION DES INTERFACES FONCTIONNELLES DU CLIENT
|--------------------------------------------------------------------------
|
| Ici nous gérons les routes du menu client
|
*/

  /* ---------------
       PROFIL_USER
  ------------------*/ 

    // Infos
     Route::get('/dashClt','UserController@dashClt')->name('dashClt');
     
     //Envoie formulaire d'ajout
     Route::post('/addVal','UserController@addVal')->name('addVal');


    // Commandes
     Route::get('/CmdClt','UserController@CmdClt')->name('CmdClt');

    // Liste covid
     Route::get('/covid','UserController@covid')->name('covid');

    // Liste stcd
     Route::get('/stcd','UserController@stcd')->name('stcd');

    // Liste stld
     Route::get('/stld','UserController@stld')->name('stld');

    // Liste jour
     Route::get('/jour','UserController@jour')->name('jour');

    // Liste hbdo
     Route::get('/hbdo','UserController@hbdo')->name('hbdo');

    // Liste stat
     Route::get('/stat','UserController@stat')->name('stat');

    // Liste stage
     Route::get('/stage','UserController@stage')->name('stage');







