<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmpreendedorController;
use App\Http\Controllers\InvestidorController;
use App\Http\Controllers\main;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [main::class, 'index'])->name('main.index');
Route::post('/register', [main::class, 'store'])->name('main.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/empreendedor/mensagens', [MessageController::class, 'empreendedorMensagens'])->name('empreendedor.mensagens');
    Route::get('/investidor/mensagens', [MessageController::class, 'investidorMensagens'])->name('investidor.mensagens');
});


/* Route::get('/admin/dados', [AdminController::class, 'dados'])->name('dados');
 */

            //Da aplicação
Route::get('/', [main::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/form', [main::class, 'form'])->name('Form');
Route::get('inform', [main::class, 'info']);
Route::get('sobre', [main::class, 'sobre']);
Route::get('inicio', [main::class, 'index']);
Route::get('fale_connosco', [main::class, 'faleconnosco']);
Route::fallback(function(){
    return view("Erro");
});



                //Para a Dashboard
Route::get('/dashboard', [HomeController::class, 'test'])->name('Dashboard');
Route::get('/notificacao', [HomeController::class, 'receber'])->name('notificacao');
Route::get('/perfil', [HomeController::class, 'ver'])->name('perfil');
Route::get('/lista_de', [HomeController::class, 'listar'])->name('Perfil');
Route::get('/empreendedor', [HomeController::class, 'empreendedores'])->name('empreendedores');
Route::get('/investidor', [HomeController::class, 'investimento'])->name('investidor');



                //Para o Perfil de cada User cadastrado
/* Route::get('/mensagem', [HomeController::class, ''])->name('SIF');
 */
Route::get('/PerfilUser', [HomeController::class, 'PerfilUser'])->name('SIF');
Route::get('/PerfilMens', [HomeController::class, 'PerfilMens'])->name('SIF');


/* Route::get('newform', [main::class, 'newform']);
 */// Rota para qualquer outra URL que não corresponda às rotas definidas

/* Meus métodos post para o store */
Route::post('/form', [main::class, 'store'])->name('main.store');
Route::post('inicio',[main::class, 'store']);
Route::post('/newform',[main::class, 'store']);
Auth::routes();


// rotas para mensagens

// Rota para as mensagens do empreendedor
Route::get('/empreendedor/mensagens', [EmpreendedorController::class, 'mensagens'])->name('empreendedor.mensagens');

// Rota para as mensagens do investidor
Route::get('/investidor/mensagens', [InvestidorController::class, 'mensagens'])->name('investidor.mensagens');

// Rota para o dashboard padrão (admin ou outro)
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');



