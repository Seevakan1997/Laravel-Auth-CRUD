<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index')->with('books', $books);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Book::create($input);
        return redirect('book')->with('flash_message', 'Book Addedd!');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show')->with('books', $book);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit')->with('books', $book);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $input = $request->all();
        $book->update($input);
        return redirect('book')->with('flash_message', 'Book Updated!');
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect('book')->with('flash_message', 'Book deleted!');
    }
}
