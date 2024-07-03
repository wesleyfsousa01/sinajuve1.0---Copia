<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function store(Request $request){
        $regras = [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:4|confirmed',
        ];
        $request->validate($regras);


        $user = User::create($request->all());
        $msg = '';
        if($user){
            $msg = "Usuário salvo com sucesso!";
        }

        $users = User::all();
        return view('user.index', ['users' => $users, 'msg'=> $msg]);
    }

    public function edit($id) {
        $user = User::find($id);

        return view('user.edit',['user' => $user]);
    }

    public function update(Request $request, $id) {
        $regras = [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:4|confirmed',
        ];

        $request->validate($regras);

        $msg = '';
        $user = User::find($id);
        $user->fill($request->all());

        if($user->save()){
            $msg = 'Usuário atualizado com sucesso!';
        }

        return redirect()->route('usuario.index',['msg'=> $msg]);
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        $users = User::all();
        return redirect()->route('usuario.index');
    }
}
