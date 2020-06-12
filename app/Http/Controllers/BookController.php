<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    function index(){
        $books=Book::all();
        return view("books",["books"=>$books]);
    }
    function create(){
        return view("book.create");
    }
    function store(Request $request){
        $title= $request->title;
        $author = $request->author;
        $price = $request->price;

        $book = new Book;
        $book->title=$title;
        $book->author= $author;
        $book->price = $price;
        $book->save();
        return redirect("/books");
    }
    function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect("/books");
    }
    function edit($id){
        $book=Book::find($id);
        return view("book.edit",["book"=>$book]);
    }
    function update($id, Request $request){
        $title= $request->title;
        $author = $request->author;
        $price = $request->price;

        $book=Book::find($id);
        $book->title=$title;
        $book->author= $author;
        $book->price = $price;
        $book->save();
        return redirect("/books");
    }
}
