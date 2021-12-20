<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AulaClienteController;


    Route::get('/register/{cnpj}', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest')->name('register.post');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->middleware('guest')->name('password.request');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->middleware('guest')->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->middleware('guest')->name('password.reset');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])->middleware('guest')->name('password.update');

    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])->middleware('auth')->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->name('verification.send')->middleware(['throttle:6,1']);               

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');

    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



Route::middleware(['theme:frontend','auth:web'])->group(function() {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

    Route::get('/funerario/assistencial/',  [ContentController::class,'view_ma'])->name('view_ma');
    Route::get('/funerario/estoque',        [ContentController::class,'view_me'])->name('view_me');
    Route::get('/cemiterio',                [ContentController::class,'view_cem'])->name('view_cem');
    Route::get('/clinica',                  [ContentController::class,'view_cli'])->name('view_cli');
    Route::get('/contabil',                 [ContentController::class,'view_con'])->name('view_con');
    Route::get('/emissor',                  [ContentController::class,'view_emi'])->name('view_emi');
    Route::get('/mobile/mutare',            [ContentController::class,'view_mut'])->name('view_mut');
    Route::get('/veicular',                 [ContentController::class,'view_sav'])->name('view_sav');
    Route::get('/telemarketing',            [ContentController::class,'view_tel'])->name('view_tel');
    Route::get('/manual',                   [ContentController::class,'view_man'])->name('view_man');

    //Conteúdo 
    
    Route::get('funerario/assistencial/conteudo/{id}',      [AulaClienteController::class, 'assistencial_view'])->name('assistencial_view');
    Route::get('funerario/estoque/conteudo/{id}',           [AulaClienteController::class, 'estoque_view'])->name('estoque_view');
    Route::get('cemiterio/conteudo/{id}',                   [AulaClienteController::class, 'cemiterio_view'])->name('cemiterio_view');
    Route::get('clinica/conteudo/{id}',                     [AulaClienteController::class, 'clinica_view'])->name('clinica_view');
    Route::get('contabil/conteudo/{id}',                    [AulaClienteController::class, 'contabil_view'])->name('contabil_view');
    Route::get('emissor/conteudo/{id}',                     [AulaClienteController::class, 'emissor_view'])->name('emissor_view');
    Route::get('mobile/conteudo/{id}',                      [AulaClienteController::class, 'mobile_view'])->name('mobile_view');
    Route::get('veicular/conteudo/{id}',                    [AulaClienteController::class, 'veicular_view'])->name('veicular_view');
    Route::get('telemarketing/conteudo/{id}',               [AulaClienteController::class, 'telemarketing_view'])->name('telemarketing_view');
    
    //  Route::get('cemiterio/{id}',          [AulaClienteController::class,'conteudo_view'])->name('conteudo_view');
    //Route::Contato
    Route::get('/contato',          [ContatoController::class, 'contato'])->name('contato.form');
    Route::post('/salvar_contato',  [ContatoController::class,'save_contato'])->name('contato_save');

    //Route Exclusão de registro
    Route::get('/usuario/exclusao/{id}', [UserController::class, 'del_user'])->name('del_user');

    // Route login/register
    
});