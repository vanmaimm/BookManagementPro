<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class DashboardController extends Controller
{
    // function index(){
    //     return view("admin.dashboard");
    // }
    function index(){
        $books=Book::all();
        return view("admin.dashboard",["books"=>$books]);
    }
    function create(){
        return view("admin.book.create");
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
        return redirect("/admin/dashboard");
    }
    function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect("/admin/dashboard");
    }
    function edit($id){
        $book=Book::find($id);
        return view("admin.book.edit",["book"=>$book]);
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
        return redirect("/admin/dashboard");
    }
}
