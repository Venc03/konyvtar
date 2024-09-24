<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $book = response()->json(Books::all());
        return $book;
    }

    public function show($id){
        $book = response()->json(Books::find($id));
        return $book;
    }

    public function destroy($id){
        Books::find($id)->delete();
    }

    public function store(Request $request){
        $book = new Books();
        $book -> author = $request->author;
        $book -> title = $request->title;
        $book -> pieces = $request->pieces;
        $book -> save();
    }

    public function update(Request $request, $id){
        $book = Books::find($id);
        $book -> author = $request->author;
        $book -> title = $request->title;
        $book -> pieces = $request->pieces;
        $book -> save();
    }
}
