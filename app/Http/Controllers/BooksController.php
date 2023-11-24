<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Books;


use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $users=User::all();
        return view('Books',compact('users'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'pages' => 'required|integer',
            'IBN' => 'required|string',
            'category' => 'required|string',
            'publisher' => 'required|string',
            'yop' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        $book= new Books();
        $book->name =$validatedData['name'];
        $book->pages =$validatedData['pages'];
        $book->IBN =$validatedData['IBN'];
        $book->category =$validatedData['category'];
        $book->publisher =$validatedData['publisher'];
        $book->yearOfPublication =$validatedData['yop'];
        $book->user_id =$validatedData['user_id'];
        $book->save();

        return redirect()->back()->with('Success','Data Added Successfully');

        // Process the form data (you can store it in the database or perform any other actions)
        // For example, using Eloquent to store data in the database
        
    }
}