<?php

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
    return view('welcome');
});

Route::view('/form','form');

/**
 * 
 * 
 * Definição de rota: 
 * Route::verbo_http('URI','Controller@metodo');
 * 
 * verbos_http = [GET, POST, PUT, PATCH, DELETE, OPTIONS];
 * 
 * GET: Utilizado para obter dados de servidor e não altera o estado do recurso.
 *      Quando um formulário GET é disparado, os dados ficam presentes na URL.
 *      Route::get($uri, $callback);
 *      
 * POST: Utilizado para criação de recursos ou envio de dados ao servidor para validação.
 *       Os dados ficam no corpo de requisição e não na URL;
 *       Route::post($uri, $callback);
 * 
 * PUT: Objeto inteiro
 * Route::put($uri, $callback);
 * 
 * PATCH: uma caracteristica do objeto
 * Route::patch($uri, $callback);
 * 
 * 
 * DELETE: 
 * Route::delete($uri, $callback);
 * 
 * OPTIONS:
 * 
 * Route::options($uri, $callback);
 * 
 * 
 * Passo a passo: definir rota -> Criar controllador -> criação de método -> camada view
 */

 /**
  * GET
  */
 Route::get('/users/1', 'UserController@index');
 Route::get('/getData', 'UserController@getData');

 /**
  * POST
  */
 
 Route::post('/postData', 'UserController@postData');

 /**
  * PUT
  */
 
  Route::put('/users/1', 'UserController@testPut');

  /**
   * PATCH
   */
  Route::patch('/users/1', 'UserController@testPatch');

  /**
   * Match PUT/PATCH
   */
  Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');