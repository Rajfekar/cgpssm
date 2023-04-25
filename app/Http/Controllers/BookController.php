<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store()
    {
        $books = Book::get();

        return view('store', compact('books'));
    }
}
