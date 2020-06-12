<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
class HomeController extends Controller
{
    function index(){
        $books=Book::all();
        return view("user.home",["books"=>$books]);
    }
}
