<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use LDAP\Result;

class UserController extends Controller
{
    public function addtocart(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'quantity' => 'required'
        ]);

        $book = Book::find($request->book_id);
        $cartItem = array('id' => $request->book_id, 'name' => $book->title, 'price' => $book->price, 'quantity' => $request->quantity);
        // Declare the array of arrays
        if (session()->has('cart')) {
            $cartList = $request->session()->get('cart');
        }
        $cartList[] = $cartItem;
        // print_r($cartList);
        // die;
        $request->session()->put('cart', $cartList);

        return Redirect::to('/store');
    }
}
