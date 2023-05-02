<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        $bcount = Book::count();
        $ucount = User::count();
        $ocount = Order::count();
        $order = Order::orderBy('id', 'desc')->get();
        $revenue = 0;
        foreach ($order as $key => $value) {
            $revenue = $revenue + $value->amount;
        }
        return view('admin.index', compact('bcount', 'ucount', 'ocount', 'revenue', 'order'));
    }

    public function userlist()
    {
        $users = User::get();
        return view('admin.userlist', compact('users'));
    }

    public function booklist()
    {
        $books = Book::get();
        return view('admin.booklist', compact('books'));
    }

    public function editbook(Book $book)
    {

        return view('admin.editbook', compact('book'));
    }

    public function addbook()
    {
        return view('admin.addbook');
    }

    public function updatebook(Request $request)
    {

        $request->validate([
            'bookid' => 'required',
            'description' => 'required'
        ]);
        $book = Book::where('bookid', '=', $request->bookid)->first();
        $filename = $book->image;
        $file = $request->file('image');

        if ($file != null) {

            $extension = $file->getClientOriginalExtension();
            $filename = "book_" . date('his') . $request->bookid . "." . $extension;
            $request->file('image')->storeAs('public/books', $filename);
        }
        $res = Book::where('bookid', '=', $request->bookid)->update([
            'bookid' => $request->bookid,
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'publisher' => $request->publisher,
            'price' => $request->price,
            'image' => $filename,
        ]);
        if ($res) {
            return Redirect::to('/booklist')->with('success', 'book updated successfully...');
        } else {
            return Redirect::to('/booklist')->with('fail', 'book updation failed...');
        }
    }
    public function addbook2(Request $request)
    {
        $filename = 0;
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

    public function deleteuser($id)
    {
        $res = User::where('id', '=', $id)->delete();
        if ($res) {
            return Redirect::to('/userlist')->with('success', 'user deleted succefully ');
        } else {
            return Redirect::to('/userlist')->with('fail', 'Opps ! failed. ');
        }
    }
}
