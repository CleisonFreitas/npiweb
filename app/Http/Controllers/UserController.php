<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function del_user($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('home');
    }
}
