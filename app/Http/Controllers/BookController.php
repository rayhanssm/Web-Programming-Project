<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function indexGuest(){
        return view('homeGuest');
    }

    public function indexAdmin(){
        return view('homeAdmin');
    }

    public function viewGuest(){
        $books = Book::all();
        return view('viewGuest', compact('books'));
    }

    public function viewAdmin(){
        $books = Book::all();
        return view('viewAdmin', compact('books'));
    }

    public function addBook(){
        return view('addBook');

    }
    
    public function store(Request $request){
        $data = Book::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect('viewAdmin');
    }

    public function destroy($id){
        $data = Book::find($id);
        $data->delete();    
        return redirect('viewAdmin');
    }
}
