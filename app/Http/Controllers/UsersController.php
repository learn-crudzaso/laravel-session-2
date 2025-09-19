<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();// select * from users eloquent,
        return view('users.index',compact('users'));
    }
    public function destroy($id){
        $user = User::find($id)->delete();
        return redirect()->route('users.index');
        //select * from users where id = ?
        // delete from users where id = ?
    }
    public function edit($id){
         $user = User::find($id);
         return view('users.edit',compact('user'));
    }
    public function update(Request $request,$id){
        $user = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('users.index');
    }
}
