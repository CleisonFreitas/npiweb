<?php

namespace App\Http\Controllers\Admin;


use App\Models\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
//use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{

 //   use AuthenticatesUsers;

    public function store(Request $request){
       if(!Auth::guard('admin')->attempt($request->only('email','password'), $request->filled('remember'))){
           throw ValidationException::withMessages([
               'email' => 'Email ou senha inválido'
           ]);
       }
       if(Auth::guard('admin')->user()->status === "Inativo"){
            Auth::guard('admin')->logout();

            return redirect()->route('admin.login');
        }else{
            return redirect()->route('admin.main');
        }
       
    }
    public function destroy() {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
    public function cadastrar(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $status = $request->status;
        $profile = $request->profile;

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $admin = new Admin;
        $admin->name = $name;
        $admin->email = $email;
        $admin->password = hash::make($password);
        $admin->status = $status;
        $admin->profile = $profile;
        $admin->save();

        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.register')->with($sessao);
        //return redirect(RouteServiceProvider::ADMIN);
    }
    public function editar($id){
       $admin = Admin::all()->where('id',$id)->where('email','!=','admin@npitecnologia.com.br');
        return view('edit_colaborador')->with('admins',$admin);
    }
    public function atualizar(Request $request, $id) {
        $id = $request->id;
        $password = $request->password;
        $status = $request->status;
        $profile = $request->profile;

        $admin = Admin::all()->where('id',$id)->first();
        $admin->password = Hash::make($password);
        $admin->status = $status;
        $admin->profile = $profile;
        $admin->save();

        $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
        return redirect()->route('admin.register')->with($sessao);

    }
    public function deletar($id){
        $admin = Admin::all()->where('id',$id,)->first();
        if($admin->email = 'admin@npitecnologia.com.br'){
            return redirect()->route('admin.register')->withError();
        }
        $admin->delete();

        if(Auth::guard('admin')->user()->id === $admin->id){
            Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
        }else   {
            $sessao = session()->flash('sucesso',"Procedimento realizado com sucesso!");
            return redirect()->route('admin.register')->with($sessao);
        }
    }

}
