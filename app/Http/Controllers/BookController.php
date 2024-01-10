<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book = response()->json(Book::all());
        return $book;
    }
    public function show($id){ 
        $book = response()->json(Book::find($id));
        return $book;
    }

    public function store(Request $request){
        $book = new Book();
        $book->title=$request->title;
        $book->author=$request->author;
        $book->price=$request->price;
        $book->img=$request->img;
        $book->category=$request->category;
        $book->save();
    }
    
    public function update($id,Request $request){
        $book = Book::find($id);
        $book->title=$request->title;
        $book->author=$request->author;
        $book->price=$request->price;
        $book->img=$request->img;
        $book->category=$request->category;
        $book->save();  
    }

    public function destroy($id){
        Book::find($id)->delete();
    }
}
