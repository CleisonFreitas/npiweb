<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FunerarioController;
use App\Http\Controllers\CemiterioController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\ContabilController;
use App\Http\Controllers\EmissorController;
use App\Http\Controllers\SavController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\TeleController;

Route::prefix('admin')->middleware('theme:admin')->name('admin.')->group(function() {
   
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login', 'auth.login')->name('login');
        Route::post('/login', [AuthController::class, 'store'])->name('acessar');
    }); 
   
    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/',                             [AdminMainController::class, 'main'])->name('main');
        Route::post('/logout',                      [AuthController::class, 'destroy'])->name('logout');
        Route::get('/colaborador',                  [AdminMainController::class, 'admin'])->name('register');
        Route::post('/colaborador/registrar',       [AuthController::class, 'cadastrar'])->name('registrar');
        Route::get('/colaborador/editar/{id}',      [AuthController::class, 'editar'])->name('editar');
        Route::post('/colaborador/atualizar/{id}',  [AuthController::class, 'atualizar'])->name('atualizar');
        Route::get('/colaborador/excluir/{id}',     [AuthController::class, 'deletar'])->name('deletar');

        // Exclusão de Usuários
       // Route::get('/usuario/exclusao/{id}',  [AdminMainController::class, 'exclu_user'])->name('exclu.user');
        // Sistemas
        Route::get('/funerario',     [AdminMainController::class,'view_fun'])->name('funerario');
        Route::get('/cemiterio',     [AdminMainController::class,'view_cem'])->name('cemiterio');
        Route::get('/clinica',       [AdminMainController::class,'view_cli'])->name('clinica');
        Route::get('/contabil',      [AdminMainController::class,'view_con'])->name('contabil');
        Route::get('/emissor',       [AdminMainController::class,'view_emi'])->name('emissor');
        Route::get('/veicular',      [AdminMainController::class,'view_sav'])->name('veicular');
        Route::get('/mobile',        [AdminMainController::class,'view_mob'])->name('mobile');
        Route::get('/telemarketing', [AdminMainController::class,'view_mct'])->name('telemarketing');

        //Funerário - Admin
        Route::post('/funerario/cadastrar',       [FunerarioController::class, 'cadastrar'])->name('fune.cad');
        Route::get('/funerario/editar/{id}',      [FunerarioController::class, 'editar'])->name('fune.edit');
        Route::post('/funerario/atualizar/{id}',  [FunerarioController::class, 'atualizar'])->name('fun.updt');
        Route::get('/funerario/deletar/{token}',  [FunerarioController::class, 'deletar'])->name('fun.del');

        //Cemitério - Admin
        Route::post('/cemiterio/cadastrar',       [CemiterioController::class, 'cadastrar'])->name('cem.cad');
        Route::get('/cemiterio/editar/{id}',      [CemiterioController::class, 'editar'])->name('cem.edit');
        Route::post('/cemiterio/atualizar/{id}',  [CemiterioController::class, 'atualizar'])->name('cem.updt');
        Route::get('/cemiterio/deletar/{token}',  [CemiterioController::class, 'deletar'])->name('cem.del');

        //Clínica - Admin
        Route::post('/clinica/cadastrar',         [ClinicaController::class, 'cadastrar'])->name('cli.cad');
        Route::get('/clinica/editar/{id}',        [ClinicaController::class, 'editar'])->name('cli.edit');
        Route::post('/clinica/atualizar/{id}',    [ClinicaController::class, 'atualizar'])->name('cli.updt');
        Route::get('/clinica/deletar/{token}',    [ClinicaController::class, 'deletar'])->name('cli.del');

        //Contábil - Admin
        Route::post('/contabil/cadastrar',        [ContabilController::class, 'cadastrar'])->name('con.cad');
        Route::get('/contabil/editar/{id}',       [ContabilController::class, 'editar'])->name('con.edit');
        Route::post('/contabil/atualizar/{id}',   [ContabilController::class, 'atualizar'])->name('con.updt');
        Route::get('/contabil/deletar/{token}',   [ContabilController::class, 'deletar'])->name('con.del');

        //Emissor - Admin
        Route::post('/emissor/cadastrar',         [EmissorController::class, 'cadastrar'])->name('emi.cad');
        Route::get('/emissor/editar/{id}',        [EmissorController::class, 'editar'])->name('emi.edit');
        Route::post('/emissor/atualizar/{id}',    [EmissorController::class, 'atualizar'])->name('emi.updt');
        Route::get('/emissor/deletar/{token}',    [EmissorController::class, 'deletar'])->name('emi.del');

        //Sav - Admin
        Route::post('/veicular/cadastrar',        [SavController::class, 'cadastrar'])->name('sav.cad');
        Route::get('/veicular/editar/{id}',       [SavController::class, 'editar'])->name('sav.edit');
        Route::post('/veicular/atualizar/{id}',   [SavController::class, 'atualizar'])->name('sav.updt');
        Route::get('/veicular/deletar/{token}',   [SavController::class, 'deletar'])->name('sav.del');

        //Mobile - Admin
        Route::post('/mobile/cadastrar',          [MobileController::class, 'cadastrar'])->name('mob.cad');
        Route::get('/mobile/editar/{id}',         [MobileController::class, 'editar'])->name('mob.edit');
        Route::post('/mobile/atualizar/{id}',     [MobileController::class, 'atualizar'])->name('mob.updt');
        Route::get('/mobile/deletar/{token}',     [MobileController::class, 'deletar'])->name('mob.del');

        //Telemarketing - Admin
        Route::post('/telemarketing/cadastrar',         [TeleController::class, 'cadastrar'])->name('tel.cad');
        Route::get('/telemarketing/editar/{id}',        [TeleController::class, 'editar'])->name('tel.edit');
        Route::post('/telemarketing/atualizar/{id}',    [TeleController::class, 'atualizar'])->name('tel.updt');
        Route::get('/telemarketing/deletar/{token}',    [TeleController::class, 'deletar'])->name('tel.del');


        //Route::get('/admin',"Auth\AdminLoginController@ShowLogin")->name('admin.login');

        // Conteúdo - Admin
        Route::get('/utilitarios/conteudo',       [AdminMainController::class,'view_content'])->name('conteudo');
        Route::get('/utilitarios/notificacoes',   [AdminMainController::class,'view_notif'])->name('notificacoes');
        Route::get('/utilitarios/colaboradores',  [AdminMainController::class,'view_colaborador'])->name('uti.colaborador');

        // Notificações - Admin
        Route::get('/requisicoes',                  [AdminMainController::class,'view_request'])->name('contato');
        Route::get('/requisicoes/{id}',             [AdminMainController::class,'editar_form'])->name('contato.edit');
        Route::post('/requisicoes/atualizar/{id}',  [AdminMainController::class,'atualizar_form'])->name('contato.updt');
        Route::get('/requisicoes/deletar/{id}',     [AdminMainController::class,'deletar_form'])->name('contato.del');

        // Formações - Admin
        Route::post('/controle/laboratorio/formacao',                   [FormController::class,'form_novo'])->name('form_novo');
        Route::get('/controle/laboratorio/formacao/delete/{id}',        [FormController::class,'form_del'])->name('form_del');
        // Índices - Admin
     //   Route::post('/controle/laboratorio/indice',         [App\Http\Controllers\IndiController::class, 'indi_novo'])->name('indi_novo');


        // Laboratório - Admin
        Route::get('/controle/laboratorio',                     [LabController::class,'view_lab'])->name('laboratorio');       //    Route::post('/controle/laboratorio/{id}',           [App\Http\Controllers\LabController::class,'edit_show'])->name('edit_show');
        Route::get('/controle/laboratorio/edit/{id}',           [LabController::class,'edit_show'])->name('edit_show');
        Route::post('/controle/laboratorio/atua',               [LabController::class,'updt_lab'])->name('updt_lab');
        Route::get('/controle/laboratorio/delete/{id}',         [LabController::class, 'del_lab'])->name('del_lab');
    //    Route::post('/controle/laboratorio/editar',         [App\Http\Controllers\LabController::class,'edit_form'])->name('lab_edit');
        
        //Em Desenvolvimento
        Route::get('/gerenciador', function() {
            return view('gerenciador');
        })->name('gerenciador');

    });

});
   

    
?>