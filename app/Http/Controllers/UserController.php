<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index(){
        $book = response()->json(User::all());
        return $book;
    }
    public function show($id){ 
        $book = response()->json(User::find($id));
        return $book;
    }

    public function store(Request $request){
        $book = new User();
        $book->name=$request->name;
        $book->email=$request->email;
        $book->password=$request->password;
        $book->permission=$request->permission;
        $book->save();
    }
    
    public function update($id,Request $request){
        $book = User::find($id);
        $book->name=$request->name;
        $book->email=$request->email;
        $book->password=$request->password;
        $book->permission=$request->permission;
        $book->save();  
    }

    public function destroy($id){
        User::find($id)->delete();
    }
}
