<?php
use GuzzleHttp\Client;
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
/*Route::resource('directorio de pestañas crud', 'controlador ');*/
Route::resource('personas', 'PersonasController');


Route::get('/', function () {
	//inicializa guzzle
	$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://jsonplaceholder.typicode.com/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
	$response = $client->request('GET', 'posts');
	//dd($response->getBody()->getContents());
	return json_decode( $response->getBody()->getContents() );
    //return view('welcome');
});

Route::get('/intervalo', 'PersonasController@temperatura');
Route::get('/json/','PersonasController@getPersonas');
Route::get('/calendario', 'PersonasController@calendario');
Route::get('/date','PersonasController@date');

/*
Route::get('/inicio','PersonasController@index');
Route::get('/crear','PersonasController@create');
Route::get('/actualizar','PersonasController@update');
Route::get('/insertar','PersonasController@store');
Route::get('/borrar','PersonasController@destroy');
*/