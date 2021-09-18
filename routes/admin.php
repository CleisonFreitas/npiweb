<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminMainController;
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
        Route::post('/funerario/cadastrar',       [App\Http\Controllers\FunerarioController::class, 'cadastrar'])->name('fune.cad');
        Route::get('/funerario/editar/{id}',      [App\Http\Controllers\FunerarioController::class, 'editar'])->name('fune.edit');
        Route::post('/funerario/atualizar/{id}',  [App\Http\Controllers\FunerarioController::class, 'atualizar'])->name('fun.updt');
        Route::get('/funerario/deletar/{token}',  [App\Http\Controllers\FunerarioController::class, 'deletar'])->name('fun.del');

        //Cemitério - Admin
        Route::post('/cemiterio/cadastrar',       [App\Http\Controllers\CemiterioController::class, 'cadastrar'])->name('cem.cad');
        Route::get('/cemiterio/editar/{id}',      [App\Http\Controllers\CemiterioController::class, 'editar'])->name('cem.edit');
        Route::post('/cemiterio/atualizar/{id}',  [App\Http\Controllers\CemiterioController::class, 'atualizar'])->name('cem.updt');
        Route::get('/cemiterio/deletar/{token}',  [App\Http\Controllers\CemiterioController::class, 'deletar'])->name('cem.del');

        //Clínica - Admin
        Route::post('/clinica/cadastrar',         [App\Http\Controllers\ClinicaController::class, 'cadastrar'])->name('cli.cad');
        Route::get('/clinica/editar/{id}',        [App\Http\Controllers\ClinicaController::class, 'editar'])->name('cli.edit');
        Route::post('/clinica/atualizar/{id}',    [App\Http\Controllers\ClinicaController::class, 'atualizar'])->name('cli.updt');
        Route::get('/clinica/deletar/{token}',    [App\Http\Controllers\ClinicaController::class, 'deletar'])->name('cli.del');

        //Contábil - Admin
        Route::post('/contabil/cadastrar',        [App\Http\Controllers\ContabilController::class, 'cadastrar'])->name('con.cad');
        Route::get('/contabil/editar/{id}',       [App\Http\Controllers\ContabilController::class, 'editar'])->name('con.edit');
        Route::post('/contabil/atualizar/{id}',   [App\Http\Controllers\ContabilController::class, 'atualizar'])->name('con.updt');
        Route::get('/contabil/deletar/{token}',   [App\Http\Controllers\ContabilController::class, 'deletar'])->name('con.del');

        //Emissor - Admin
        Route::post('/emissor/cadastrar',         [App\Http\Controllers\EmissorController::class, 'cadastrar'])->name('emi.cad');
        Route::get('/emissor/editar/{id}',        [App\Http\Controllers\EmissorController::class, 'editar'])->name('emi.edit');
        Route::post('/emissor/atualizar/{id}',    [App\Http\Controllers\EmissorController::class, 'atualizar'])->name('emi.updt');
        Route::get('/emissor/deletar/{token}',    [App\Http\Controllers\EmissorController::class, 'deletar'])->name('emi.del');

        //Sav - Admin
        Route::post('/veicular/cadastrar',        [App\Http\Controllers\SavController::class, 'cadastrar'])->name('sav.cad');
        Route::get('/veicular/editar/{id}',       [App\Http\Controllers\SavController::class, 'editar'])->name('sav.edit');
        Route::post('/veicular/atualizar/{id}',   [App\Http\Controllers\SavController::class, 'atualizar'])->name('sav.updt');
        Route::get('/veicular/deletar/{token}',   [App\Http\Controllers\SavController::class, 'deletar'])->name('sav.del');

        //Mobile - Admin
        Route::post('/mobile/cadastrar',          [App\Http\Controllers\MobileController::class, 'cadastrar'])->name('mob.cad');
        Route::get('/mobile/editar/{id}',         [App\Http\Controllers\MobileController::class, 'editar'])->name('mob.edit');
        Route::post('/mobile/atualizar/{id}',     [App\Http\Controllers\MobileController::class, 'atualizar'])->name('mob.updt');
        Route::get('/mobile/deletar/{token}',     [App\Http\Controllers\MobileController::class, 'deletar'])->name('mob.del');

        //Telemarketing - Admin
        Route::post('/telemarketing/cadastrar',         [App\Http\Controllers\TeleController::class, 'cadastrar'])->name('tel.cad');
        Route::get('/telemarketing/editar/{id}',        [App\Http\Controllers\TeleController::class, 'editar'])->name('tel.edit');
        Route::post('/telemarketing/atualizar/{id}',    [App\Http\Controllers\TeleController::class, 'atualizar'])->name('tel.updt');
        Route::get('/telemarketing/deletar/{token}',    [App\Http\Controllers\TeleController::class, 'deletar'])->name('tel.del');


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
        Route::post('/controle/laboratorio/formacao',       [App\Http\Controllers\FormController::class,'form_novo'])->name('form_novo');

        // Índices - Admin
        Route::post('/controle/laboratorio/indice',         [App\Http\Controllers\IndiController::class, 'indi_novo'])->name('indi_novo');


        // Laboratório - Admin
        Route::get('/controle/laboratorio',                  [App\Http\Controllers\LabController::class,'view_lab'])->name('laboratorio');       //    Route::post('/controle/laboratorio/{id}',           [App\Http\Controllers\LabController::class,'edit_show'])->name('edit_show');
        Route::post('/controle/laboratorio/edit',            [App\Http\Controllers\LabController::class,'edit_show'])->name('edit_show');
        Route::post('/controle/laboratorio/atua',            [App\Http\Controllers\LabController::class,'updt_lab'])->name('updt_lab');

    //    Route::post('/controle/laboratorio/editar',         [App\Http\Controllers\LabController::class,'edit_form'])->name('lab_edit');
        
        //Em Desenvolvimento
        Route::get('/gerenciador', function() {
            return view('gerenciador');
        })->name('gerenciador');

    });

});
   

    
?>