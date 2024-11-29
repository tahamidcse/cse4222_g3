<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{ public function index()
{
    $books=Book::where('stock', '>',0)->get();
    return view('books.index')->with('books',$books);
}
    //
}
