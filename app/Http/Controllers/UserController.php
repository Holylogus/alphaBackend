<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index(){
        $user = response()->json(User::all());
        return $user;
    }
    public function show($id){ 
        $user = response()->json(User::find($id));
        return $user;
    }

    public function store(Request $request){
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->permission=$request->permission;
        $user->save();
    }
    
    public function update($id,Request $request){
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->permission=$request->permission;
        $user->save();  
    }

    public function destroy($id){
        User::find($id)->delete();
    }
}
