<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController 
{
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    public function show($id) 
    { 
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    } 

    public function create()
    {
        
        return view('books.create');
    }
    
    public function store(Request $request)
    {
    Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'year' => $request->year,
        'stock' => $request->stock,
    ]);

    return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
    return view('books.edit', compact('book'));
    }

    public function destroy(Book $book)
    {
    $book->delete();

    return redirect()->route('books.index');
    }
}
