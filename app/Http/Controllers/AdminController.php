<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }
    public function userlist()
    {
        return view('admin.userlist');
    }
    public function booklist()
    {
        $books = Book::get();
        return view('admin.booklist', compact('books'));
    }

    public function editbook($id)
    {

        $book = Book::where('id', '=', $id)->first();
        return view('admin.editbook', compact('book'));
    }

    public function addbook()
    {
        return view('admin.addbook');
    }

    public function updatebook(Request $request)
    {
        echo $request->bookid;
        echo $request->title;
        die;
    }
    public function addbook2(Request $request)
    {
        $filename = 'nullimg';
        $file = $request->file('image');
        if ($file != null) {
            $extension = $file->getClientOriginalExtension();
            $filename = "book_" . date('his') . $request->bookid . "." . $extension;
            $request->file('image')->storeAs('public/books', $filename);
        }
        $res = Book::insert([
            'bookid' => $request->bookid,
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'price' => $request->price,
            'publisher' => $request->publisher,
            'image' => $filename
        ]);
        if ($res) {
            return Redirect::to('/booklist')->with('success', 'book added succefully.');
        } else {
            return Redirect::to('/booklist')->with('fail', 'book not added');
        }
    }

    public function deletebook($id)
    {
        $res = Book::where('id', '=', $id)->delete();
        if ($res) {
            return Redirect::to('/booklist')->with('success', 'successfully deleted book 🤗 ');
        } else {
            return Redirect::to('/booklist')->with('fail', 'Opps ! failed. ');
        }
    }
}
