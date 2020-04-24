<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function __construct(){
    //     $this->middleware('admin');
    // }
    public function adminDashboard(){
        $books = Book::All();
        return view('admin.dashboard')->with('books',$books);
    }

    public function addView(){
        return view('admin.book');
    }
    public function addBook(Request $request){
        $book = new Book;
        $book->book_name = $request->book_name;
        $book->book_year = $request->book_year;
        $book->book_category = $request->book_category;
        $book->save();
        return redirect('/admin/add-view');
    }
    public function deleteBook(Request $request){
        $book = Book::where('id',$request->id)->first();
            $book->delete();
            return redirect('/admin/dashboard');

    }
    public function editView(Request $request){
        $book = Book::where('id',$request->id)->first();
        return view('admin.edit-book')->with('book',$book);
    }

    public function editBook(Request $request){
        $book = Book::where('id',$request->id)->first();
        $book->book_name = $request->book_name;
        $book->book_year = $request->book_year;
        $book->book_category = $request->book_category;
        $book->save();
        return redirect('/admin/dashboard');
    }
}
