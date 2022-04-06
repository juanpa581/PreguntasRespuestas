<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RespuestaController;

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
    return view('home');
})->middleware('auth');

Route::get('/login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');


Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

// para obtener datos
Route::get('/users', [SessionsController::class, 'show'])
->name('user.show');

//para insertar datos en el formulario
Route::get('/users', [PreguntaController::class, 'index'])
->name('user.index', PreguntaController::class);

Route::get('/users/crear/preg', [PreguntaController::class, 'create'])
->name('user.crearpreg', PreguntaController::class);

Route::post('/users/crear', [PreguntaController::class, 'store'])
->name('user.store', PreguntaController::class);

Route::resource('preguntas', PreguntaController::class);

//para guardar respuestas
Route::get('/usersres', [RespuestaController::class, 'index'])
->name('user.indexr', RespuestaController::class);

Route::get('/users/crear/res', [RespuestaController::class, 'create'])
->name('user.crearres', RespuestaController::class);

Route::post('/users/crear/respuesta', [RespuestaController::class, 'store'])
->name('user.storeres', RespuestaController::class);

Route::resource('respuestas', RespuestaController::class);

//para mostrar la pagina principal
Route::get('/inicio', [PreguntaController::class, 'indexd'])
->name('user.indexd', PreguntaController::class);