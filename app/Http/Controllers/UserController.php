<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function ShowProfile(){
        $user = Auth::User();
        return view('user.edit-profile')->with('user',$user);
    }   
    public function LogOut(){
        auth()->logout();
        return redirect('home');
    }

    public function ChangeProfile(Request $request){
        $user = Auth::User();
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->save();
        return dd("save");
    }
    public function showLibraryBook(){
        $books = Book::All();
        return view('user.user',compact('books'));
    }
    public function getBook(Request $request){
        $id = $request->book_id;
        $book = Book::where('id',$id)->first();
        $user_id = Auth::id();
        $book->owner_id = $user_id;
        $book->save();
        return redirect('/dashboard');
    }

    public function showCollection(){
        $user = Auth::user();
        return view('user.collection')->with('books',$user->books);
    }

    public function removeBook(Request $request){
        $id = $request->book_id;
        $book = Book::where('id',$id)->first();
        $book->owner_id = null;
        $book->save();
        return redirect('/show-collection');
    }
}
